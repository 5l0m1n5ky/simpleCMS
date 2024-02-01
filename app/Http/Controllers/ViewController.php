<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Offer;
use App\Models\Question;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('home', [
            'enterpriseName' => Enterprise::first()->name,
            'enterpriseLogoPath' => Enterprise::first()->logo_path,
            'enterpriseBgPath' => Enterprise::first()->bg_path
        ]);
    }

    public function showInfo()
    {
        return view('info', [
            'enterpriseDescription' => Enterprise::first()->description
        ]);
    }

    public function showLocation()
    {
        return view('location', [
            'enterpriseLocation' => Enterprise::first()->address,
            'enterpriseEmail' => Enterprise::first()->email,
            'enterprisePhone' => Enterprise::first()->phone
        ]);
    }

    public function showOffer()
    {
        return view('offer', [
            'offers' => Offer::all()
        ]);
    }

    public function showGallery()
    {
        return view('gallery', [
            'images' => Image::latest()->filter(request(['search']))->get()
        ]);
    }

    public function indexEdit()
    {
        return view('home-edit', [
            'enterpriseName' => Enterprise::first()->name,
            'enterpriseLogoPath' => Enterprise::first()->logo_path,
            'enterpriseBgPath' => Enterprise::first()->bg_path
        ]);
    }
    public function editInfo()
    {
        return view('info-edit', [
            'enterpriseDescription' => Enterprise::first()->description
        ]);
    }
    public function editLocation()
    {
        return view('location-edit', [
            'enterpriseLocation' => Enterprise::first()->address,
            'enterpriseEmail' => Enterprise::first()->email,
            'enterprisePhone' => Enterprise::first()->phone
        ]);
    }
    public function editOffer()
    {
        return view('offer-edit', [
            'offers' => Offer::all()
        ]);
    }
    public function editGallery()
    {
        return view('gallery-edit', [
            'images' => Image::latest()->filter(request(['search']))->get()
        ]);
    }
    public function editHomeData(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('images', 'public');
        } else {
            $formFields['logo'] = Enterprise::first()->logo_path;
        }

        if ($request->hasFile('bg-file')) {
            $formFields['bg-file'] = $request->file('bg-file')->store('images', 'public');
        } else {
            $formFields['bg-file'] = 'images/rock_-_15527 (720p).mp4';
            $formFields['bg-file'] = Enterprise::first()->bg_path;
        }

        Enterprise::query()->update([
            'name' => $request->name,
            'logo_path' => $formFields['logo'],
            'bg_path' => $formFields['bg-file'],
        ]);

        return back()->with('message', 'Zaktualizowano stronę główną');
    }

    public function editInfoData(Request $request, Enterprise $enterprise)
    {

        Enterprise::query()->update([
            'description' => $request->description,
        ]);

        return back();
    }
    public function editLocationData(Request $request, Enterprise $enterprise)
    {
        $request->validate([
            'address' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'required'
        ]);

        Enterprise::query()->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return back();
    }
    public function editOfferData(Request $request, Offer $offer)
    {
        $request->validate([
            'offerName' => 'required',
            'offerPrice' => 'required'
        ]);

        $offer->update([
            'name' => $request->offerName,
            'price' => $request->offerPrice,
        ]);

        return back();
    }

    public function deleteOffer(Offer $offer)
    {
        $offer->delete();
        return back();
    }
    public function createOffer(Request $request)
    {

        $request->validate([
            'offerName' => 'required',
            'offerPrice' => 'required'
        ]);

        Offer::query()->create([
            'name' => $request->offerName,
            'price' => $request->offerPrice,
        ]);

        return back();
    }
    public function createImage(Request $request)
    {
        $formFields = $request->validate([
            'file_path' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('file_path')) {
            $formFields['file_path'] = $request->file('file_path')->store('images', 'public');
        }

        Image::create($formFields);

        return back();
    }

    public function deleteImage(Image $image)
    {
        $image->delete();

        return back();
    }

    public function showChatbotQuestions()
    {
        return view('chatbot-question', [
            'questions' => Question::all()
        ]);
    }
}
