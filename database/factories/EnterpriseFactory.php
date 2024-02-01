<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enterprise>
 */
class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'DRONE VISION',
            'logo_path' => 'images/icons8-drone-bottom-view-96.png',
            'description' => 'Nasza firma to innowacyjne przedsiębiorstwo specjalizujące się w świadczeniu zaawansowanych usług z wykorzystaniem nowoczesnych dronów. Nasza misja to dostarczanie klientom unikalnych rozwiązań opartych na najnowszych technologiach dronowych, aby sprostać różnorodnym potrzebom biznesowym i indywidualnym. Posiadamy zespół doświadczonych pilotów dronów oraz specjalistów branżowych. Nasza flota dronów jest nowoczesna, zapewniając wysoką jakość usług. Stawiamy na innowacyjne rozwiązania i dostosowujemy się do dynamicznie zmieniających się potrzeb rynku. Dbamy o zgodność z obowiązującymi przepisami i normami bezpieczeństwa.',
            'address' => 'Stary Rynek, Bydgoszcz',
            'email' => 'dronevision@bok.pl',
            'phone' => '+48 123 456 789',
            'bg_path' => 'images/rock_-_15527 (720p).mp4'
        ];
    }
}
