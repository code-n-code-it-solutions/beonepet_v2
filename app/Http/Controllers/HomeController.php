<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    static array $images = [
        "cats" => [
            [
                "filename" => "adorable-white-british-cat-with-pink-bow-tie.jpg",
                "name" => "Whiskers",
                "breed" => "British Shorthair",
                "slug" => "whiskers-british-shorthair"
            ],
            [
                "filename" => "american-staffordshire-terrier-dog-british-shorthair-cat-together-pink-background.jpg",
                "name" => "Mittens",
                "breed" => "British Shorthair",
                "slug" => "mittens-british-shorthair"
            ],
            [
                "filename" => "beautiful-cat-dachshund-dog-rug-indoor.jpg",
                "name" => "Shadow",
                "breed" => "Dachshund",
                "slug" => "shadow-dachshund"
            ],
            [
                "filename" => "beautiful-cat-portrait-close-up.jpg",
                "name" => "Snowball",
                "breed" => "Mixed Breed",
                "slug" => "snowball-mixed-breed"
            ],
            [
                "filename" => "bengal-cat-light-brown-cream-looking-with-pleading-stare-viewer-with-space-advertizing-text.jpg",
                "name" => "Tiger",
                "breed" => "Bengal",
                "slug" => "tiger-bengal"
            ],
            [
                "filename" => "border-collie-dog-portrait-with-hiding-cat.jpg",
                "name" => "Smokey",
                "breed" => "Mixed Breed",
                "slug" => "smokey-mixed-breed"
            ],
            [
                "filename" => "brown-bengal-cat-border-collie-dog-panting-with-happy-expression-together-yellow.jpg",
                "name" => "Leo",
                "breed" => "Bengal",
                "slug" => "leo-bengal"
            ],
            [
                "filename" => "close-up-cat.jpg",
                "name" => "Simba",
                "breed" => "Mixed Breed",
                "slug" => "simba-mixed-breed"
            ],
            [
                "filename" => "close-up-portrait-dog-cat-home.jpg",
                "name" => "Luna",
                "breed" => "Mixed Breed",
                "slug" => "luna-mixed-breed"
            ],
            [
                "filename" => "cute-ginger-kitten-peeks-out-from-edge-white-board-copy-space.jpg",
                "name" => "Oliver",
                "breed" => "Ginger",
                "slug" => "oliver-ginger"
            ],
            [
                "filename" => "cute-gray-kitten-funny-fun-playing-dancing-yellow.jpg",
                "name" => "Bella",
                "breed" => "Gray Tabby",
                "slug" => "bella-gray-tabby"
            ],
            [
                "filename" => "cute-little-gray-cat-kitten-yellow-looks-plays-buisiness-copyspace.jpg",
                "name" => "Chloe",
                "breed" => "Gray Tabby",
                "slug" => "chloe-gray-tabby"
            ],
            [
                "filename" => "cute-red-kitten-white-background-playful-funny-pet-copy-space.jpg",
                "name" => "Oscar",
                "breed" => "Ginger",
                "slug" => "oscar-ginger"
            ],
            [
                "filename" => "domestic-cat-blue-background-closeup-pets-copy-space.jpg",
                "name" => "Max",
                "breed" => "Domestic Shorthair",
                "slug" => "max-domestic-shorthair"
            ],
            [
                "filename" => "kitty-with-monochrome-wall-her.jpg",
                "name" => "Molly",
                "breed" => "Mixed Breed",
                "slug" => "molly-mixed-breed"
            ],
            [
                "filename" => "lying-down-cat-dog-together-front-wooden-background.jpg",
                "name" => "Daisy",
                "breed" => "Mixed Breed",
                "slug" => "daisy-mixed-breed"
            ],
            [
                "filename" => "multicolored-cat-raised-its-paw-up-looks-somewhere-with-interest-it-is-coral-background.jpg",
                "name" => "Charlie",
                "breed" => "Calico",
                "slug" => "charlie-calico"
            ],
            [
                "filename" => "norwegian-forest-cat.jpg",
                "name" => "Loki",
                "breed" => "Norwegian Forest Cat",
                "slug" => "loki-norwegian-forest-cat"
            ],
            [
                "filename" => "photo-cute-cat-dog-domestic-animals.jpg",
                "name" => "Sophie",
                "breed" => "Mixed Breed",
                "slug" => "sophie-mixed-breed"
            ],
            [
                "filename" => "portrait-funny-cute-gray-white-fluffy-cat-sunny-pink-glasses-lying-pink-background.jpg",
                "name" => "Lucy",
                "breed" => "Mixed Breed",
                "slug" => "lucy-mixed-breed"
            ],
            [
                "filename" => "scottish-fold-cat-floor.jpg",
                "name" => "Jack",
                "breed" => "Scottish Fold",
                "slug" => "jack-scottish-fold"
            ],
            [
                "filename" => "straight-cat-colored-backgrounds.jpg",
                "name" => "Milo",
                "breed" => "Mixed Breed",
                "slug" => "milo-mixed-breed"
            ],
            [
                "filename" => "tabby-cat-border-collie-dog-with-happy-expression-together-blue-background-banner-fra.jpg",
                "name" => "Bailey",
                "breed" => "Tabby",
                "slug" => "bailey-tabby"
            ],
            [
                "filename" => "tabby-cat-border-collie-dog-against-blue-gradient-background.jpg",
                "name" => "Nala",
                "breed" => "Tabby",
                "slug" => "nala-tabby"
            ],
            [
                "filename" => "there-is-cat-dog-sitting-together-blue-surface-generative-ai.jpg",
                "name" => "Buddy",
                "breed" => "Mixed Breed",
                "slug" => "buddy-mixed-breed"
            ],
            [
                "filename" => "vecteezy_ai-generated-cat-and-dog-together-with-happy-expressions-ai_35424089.jpg",
                "name" => "Ruby",
                "breed" => "Mixed Breed",
                "slug" => "ruby-mixed-breed"
            ],
            [
                "filename" => "vecteezy_cao-e-gato_12484995.jpg",
                "name" => "Rocky",
                "breed" => "Mixed Breed",
                "slug" => "rocky-mixed-breed"
            ],
            [
                "filename" => "vecteezy_cute-balinese-cat-portrait-pink-background-with-copy_23026465.jpg",
                "name" => "Oreo",
                "breed" => "Balinese",
                "slug" => "oreo-balinese"
            ],
            [
                "filename" => "vecteezy_cute-domestic-cat-portrait-white-gradient-background-with_23026455.jpg",
                "name" => "Princess",
                "breed" => "Domestic Shorthair",
                "slug" => "princess-domestic-shorthair"
            ],
            [
                "filename" => "vecteezy_portrait-of-a-sleeping-domestic-cat-orange-background-with_23026517.jpg",
                "name" => "Pepper",
                "breed" => "Domestic Shorthair",
                "slug" => "pepper-domestic-shorthair"
            ],
            [
                "filename" => "vecteezy_white-persian-cat-portrait-bright-yellow-gradient_23026459.jpg",
                "name" => "Gizmo",
                "breed" => "Persian",
                "slug" => "gizmo-persian"
            ],
        ],
        "dogs" => [
            [
                "filename" => "american-staffordshire-terrier-dog-british-shorthair-cat-together-pink-background.jpg",
                "name" => "Rex",
                "breed" => "American Staffordshire Terrier",
                "slug" => "rex-american-staffordshire-terrier"
            ],
            [
                "filename" => "border-collie-dog-portrait-with-hiding-cat.jpg",
                "name" => "Scout",
                "breed" => "Border Collie",
                "slug" => "scout-border-collie"
            ],
            [
                "filename" => "border-collie-dog-shetland-sheepdog-dog-photo-studio-blue-background.jpg",
                "name" => "Riley",
                "breed" => "Shetland Sheepdog",
                "slug" => "riley-shetland-sheepdog"
            ],
            [
                "filename" => "border-collie-front-white-wall.jpg",
                "name" => "Finn",
                "breed" => "Border Collie",
                "slug" => "finn-border-collie"
            ],
            [
                "filename" => "border-collie-isolated-white.jpg",
                "name" => "Zoe",
                "breed" => "Border Collie",
                "slug" => "zoe-border-collie"
            ],
            [
                "filename" => "brown-bengal-cat-border-collie-dog-panting-with-happy-expression-together-yellow.jpg",
                "name" => "Sadie",
                "breed" => "Border Collie",
                "slug" => "sadie-border-collie"
            ],
            [
                "filename" => "close-up-dog.jpg",
                "name" => "Duke",
                "breed" => "Mixed Breed",
                "slug" => "duke-mixed-breed"
            ],
            [
                "filename" => "close-up-dog (1).jpg",
                "name" => "Bella",
                "breed" => "Mixed Breed",
                "slug" => "bella-mixed-breed"
            ],
            [
                "filename" => "closeup-curious-border-collie-dog-looking-camera-isolated-blue-background.jpg",
                "name" => "Luna",
                "breed" => "Border Collie",
                "slug" => "luna-border-collie"
            ],
            [
                "filename" => "closeup-mixedbreed-puppy-4-months-old-front-white-b.jpg",
                "name" => "Cooper",
                "breed" => "Mixed Breed",
                "slug" => "cooper-mixed-breed"
            ],
            [
                "filename" => "cute-beagle-puppy-smiling-blue-solid-background.jpg",
                "name" => "Charlie",
                "breed" => "Beagle",
                "slug" => "charlie-beagle"
            ],
            [
                "filename" => "cute-jack-russell-terrier-puppy-mid-jump-looking-through-hanging-rope-toy-against-turquoise.jpg",
                "name" => "Bailey",
                "breed" => "Jack Russell Terrier",
                "slug" => "bailey-jack-russell-terrier"
            ],
            [
                "filename" => "cute-puppy-with-leash-blue-background-generative-ai-illustration.jpg",
                "name" => "Milo",
                "breed" => "Mixed Breed",
                "slug" => "milo-mixed-breed"
            ],
            [
                "filename" => "dog-cat-sitting-photo-isolated-blue-studio-background.jpg",
                "name" => "Teddy",
                "breed" => "Mixed Breed",
                "slug" => "teddy-mixed-breed"
            ],
            [
                "filename" => "dog-cat-sitting-photo-isolated-pink-studio-background.jpg",
                "name" => "Murphy",
                "breed" => "Mixed Breed",
                "slug" => "murphy-mixed-breed"
            ],
            [
                "filename" => "dog-cat-sitting-photo-isolated-yellow-studio-background.jpg",
                "name" => "Leo",
                "breed" => "Mixed Breed",
                "slug" => "leo-mixed-breed"
            ],
            [
                "filename" => "domestic-cute-dog.jpg",
                "name" => "Lucky",
                "breed" => "Mixed Breed",
                "slug" => "lucky-mixed-breed"
            ],
            [
                "filename" => "fist-hand-cat-paw-standoff-animals-people.jpg",
                "name" => "Max",
                "breed" => "Mixed Breed",
                "slug" => "max-mixed-breed"
            ],
            [
                "filename" => "group-dogs-orange-background-neural-network-ai-generated-art.jpg",
                "name" => "Rocky",
                "breed" => "Mixed Breed",
                "slug" => "rocky-mixed-breed"
            ],
            [
                "filename" => "group-dogs-with-sweater-front.jpg",
                "name" => "Ruby",
                "breed" => "Mixed Breed",
                "slug" => "ruby-mixed-breed"
            ],
            [
                "filename" => "happy-puppy-dog-smiling-isolated-purple-background.jpg",
                "name" => "Buster",
                "breed" => "Mixed Breed",
                "slug" => "buster-mixed-breed"
            ],
            [
                "filename" => "lying-down-cat-dog-together-front-wooden-background.jpg",
                "name" => "Riley",
                "breed" => "Mixed Breed",
                "slug" => "riley-mixed-breed"
            ],
            [
                "filename" => "photo-cute-cat-dog-domestic-animals.jpg",
                "name" => "Bella",
                "breed" => "Mixed Breed",
                "slug" => "bella-mixed-breed"
            ],
            [
                "filename" => "portrait-adorable-dog-looking-up.jpg",
                "name" => "Buddy",
                "breed" => "Mixed Breed",
                "slug" => "buddy-mixed-breed"
            ],
            [
                "filename" => "portrait-dog-sticking-out-his-tongue.jpg",
                "name" => "Maggie",
                "breed" => "Mixed Breed",
                "slug" => "maggie-mixed-breed"
            ],
            [
                "filename" => "purebred-dog-being-cute-studio.jpg",
                "name" => "Coco",
                "breed" => "Mixed Breed",
                "slug" => "coco-mixed-breed"
            ],
            [
                "filename" => "scotch-collie-sitting-front-white-background.jpg",
                "name" => "Sophie",
                "breed" => "Scottish Collie",
                "slug" => "sophie-scottish-collie"
            ],
            [
                "filename" => "small-dog-being-adorable-studio.jpg",
                "name" => "Oliver",
                "breed" => "Mixed Breed",
                "slug" => "oliver-mixed-breed"
            ],
            [
                "filename" => "striped-tabby-cat-border-collie-dog-with-happy-expression-together-blue-background-banner-fra.jpg",
                "name" => "Oscar",
                "breed" => "Border Collie",
                "slug" => "oscar-border-collie"
            ],
            [
                "filename" => "tabby-cat-border-collie-dog-against-blue-gradient-background.jpg",
                "name" => "Daisy",
                "breed" => "Border Collie",
                "slug" => "daisy-border-collie"
            ],
            [
                "filename" => "there-is-cat-dog-sitting-together-blue-surface-generative-ai.jpg",
                "name" => "Jasper",
                "breed" => "Mixed Breed",
                "slug" => "jasper-mixed-breed"
            ],
            [
                "filename" => "two-dogs-one-cat-staring-camera.jpg",
                "name" => "Harley",
                "breed" => "Mixed Breed",
                "slug" => "harley-mixed-breed"
            ],
            [
                "filename" => "vecteezy_ai-generated-cat-and-dog-together-with-happy-expressions-ai_35424089.jpg",
                "name" => "Rex",
                "breed" => "Mixed Breed",
                "slug" => "rex-mixed-breed"
            ],
            [
                "filename" => "vecteezy_cao-e-gato_12484995.jpg",
                "name" => "Ranger",
                "breed" => "Mixed Breed",
                "slug" => "ranger-mixed-breed"
            ],
            [
                "filename" => "vecteezy_close-up-portrait-of-dog-wearing-glasses-and-headset_23026510.jpg",
                "name" => "Gizmo",
                "breed" => "Mixed Breed",
                "slug" => "gizmo-mixed-breed"
            ],
            [
                "filename" => "vecteezy_cute-birthday-dog-illustration-ai-generative_23698372.jpg",
                "name" => "Bruno",
                "breed" => "Mixed Breed",
                "slug" => "bruno-mixed-breed"
            ],
            [
                "filename" => "vecteezy_cute-birthday-dog-illustration-ai-generative_23698381.jpg",
                "name" => "Diesel",
                "breed" => "Mixed Breed",
                "slug" => "diesel-mixed-breed"
            ],
            [
                "filename" => "vecteezy_empty-space-background-with-dog-illustration-ai-generative_24569705.jpg",
                "name" => "Gunner",
                "breed" => "Mixed Breed",
                "slug" => "gunner-mixed-breed"
            ],
        ],
        "horses" => [
            [
                "filename" => "beautiful-black-horse-running-hills.jpg",
                "name" => "Black Beauty",
                "breed" => "Friesian",
                "slug" => "black-beauty-friesian"
            ],
            [
                "filename" => "beautiful-brown-horse-grazing-meadow.jpg",
                "name" => "Chestnut",
                "breed" => "Thoroughbred",
                "slug" => "chestnut-thoroughbred"
            ],
            [
                "filename" => "beautiful-horse-country-side.jpg",
                "name" => "Spirit",
                "breed" => "Mustang",
                "slug" => "spirit-mustang"
            ],
            [
                "filename" => "beautiful-horse-field-farm-australia-horses-meadow.jpg",
                "name" => "Thunder",
                "breed" => "Quarter Horse",
                "slug" => "thunder-quarter-horse"
            ],
            [
                "filename" => "brown-horse-grazing-green-grass-bright-day-with-fence-stable-horse-field-countryside.jpg",
                "name" => "Star",
                "breed" => "Quarter Horse",
                "slug" => "star-quarter-horse"
            ],
            [
                "filename" => "brown-horse-standing-against-sky.jpg",
                "name" => "Blaze",
                "breed" => "Arabian",
                "slug" => "blaze-arabian"
            ],
            [
                "filename" => "brown-horse-with-black-mane-running-field.jpg",
                "name" => "Shadow",
                "breed" => "Thoroughbred",
                "slug" => "shadow-thoroughbred"
            ],
            [
                "filename" => "brown-stallion-head-looking-out-his-stable.jpg",
                "name" => "Champ",
                "breed" => "Stallion",
                "slug" => "champ-stallion"
            ],
            [
                "filename" => "close-up-brown-horse-against-structure.jpg",
                "name" => "Rusty",
                "breed" => "Mustang",
                "slug" => "rusty-mustang"
            ],
            [
                "filename" => "close-up-horse.jpg",
                "name" => "Spirit",
                "breed" => "Mustang",
                "slug" => "spirit-mustang"
            ],
            [
                "filename" => "close-up-horse (1).jpg",
                "name" => "Jet",
                "breed" => "Friesian",
                "slug" => "jet-friesian"
            ],
            [
                "filename" => "close-up-horse-field.jpg",
                "name" => "Duke",
                "breed" => "Quarter Horse",
                "slug" => "duke-quarter-horse"
            ],
            [
                "filename" => "close-up-horse-field-against-sky.jpg",
                "name" => "Thunder",
                "breed" => "Quarter Horse",
                "slug" => "thunder-quarter-horse"
            ],
            [
                "filename" => "close-up-horse-field-against-sky (1).jpg",
                "name" => "Blaze",
                "breed" => "Arabian",
                "slug" => "blaze-arabian"
            ],
            [
                "filename" => "close-up-horse-nature.jpg",
                "name" => "Star",
                "breed" => "Thoroughbred",
                "slug" => "star-thoroughbred"
            ],
            [
                "filename" => "close-up-horse-ranch.jpg",
                "name" => "Rusty",
                "breed" => "Mustang",
                "slug" => "rusty-mustang"
            ],
            [
                "filename" => "english-thoroughbred-horse-field.jpg",
                "name" => "Jet",
                "breed" => "Thoroughbred",
                "slug" => "jet-thoroughbred"
            ],
            [
                "filename" => "horse-meadow.jpg",
                "name" => "Spirit",
                "breed" => "Mustang",
                "slug" => "spirit-mustang"
            ],
            [
                "filename" => "horse-portrait.jpg",
                "name" => "Blaze",
                "breed" => "Arabian",
                "slug" => "blaze-arabian"
            ],
            [
                "filename" => "horse-standing-against-clear-sky.jpg",
                "name" => "Thunder",
                "breed" => "Quarter Horse",
                "slug" => "thunder-quarter-horse"
            ],
            [
                "filename" => "horse-standing-against-clear-sky-winter.jpg",
                "name" => "Champ",
                "breed" => "Friesian",
                "slug" => "champ-friesian"
            ],
            [
                "filename" => "horse-walking-front-white-background.jpg",
                "name" => "Star",
                "breed" => "Quarter Horse",
                "slug" => "star-quarter-horse"
            ],
            [
                "filename" => "horse-white.jpg",
                "name" => "Spirit",
                "breed" => "Mustang",
                "slug" => "spirit-mustang"
            ],
            [
                "filename" => "horse-with-long-mane-pasture-against-beautiful-blue-sky.jpg",
                "name" => "Rusty",
                "breed" => "Mustang",
                "slug" => "rusty-mustang"
            ],
            [
                "filename" => "horses-farm.jpg",
                "name" => "Blaze",
                "breed" => "Arabian",
                "slug" => "blaze-arabian"
            ],
            [
                "filename" => "horses-grazing-field-with-one-them-eating-grass.jpg",
                "name" => "Star",
                "breed" => "Quarter Horse",
                "slug" => "star-quarter-horse"
            ],
            [
                "filename" => "portrait-beautiful-brown-horse-meadow-background.jpg",
                "name" => "Spirit",
                "breed" => "Mustang",
                "slug" => "spirit-mustang"
            ],
            [
                "filename" => "portrait-beautiful-brown-horse-outdoors.jpg",
                "name" => "Rusty",
                "breed" => "Mustang",
                "slug" => "rusty-mustang"
            ],
            [
                "filename" => "portrait-horse-ranch.jpg",
                "name" => "Jet",
                "breed" => "Thoroughbred",
                "slug" => "jet-thoroughbred"
            ],
            [
                "filename" => "portrait-purebred-horse-nature-background.jpg",
                "name" => "Blaze",
                "breed" => "Arabian",
                "slug" => "blaze-arabian"
            ],
            [
                "filename" => "running-gallop-black-friesian-horse.jpg",
                "name" => "Jet",
                "breed" => "Friesian",
                "slug" => "jet-friesian"
            ],
            [
                "filename" => "shallow-focus-shot-brown-horse-wearing-red-harness.jpg",
                "name" => "Champ",
                "breed" => "Stallion",
                "slug" => "champ-stallion"
            ],
        ],
        "rabbits" => [
            [
                "filename" => "beautiful-funny-grey-rabbit-natural-green-background.jpg",
                "name" => "Thumper",
                "breed" => "Gray Rabbit",
                "slug" => "thumper-gray-rabbit"
            ],
            [
                "filename" => "bunny-rabbit-sitting-white-isolated.jpg",
                "name" => "Snowy",
                "breed" => "White Rabbit",
                "slug" => "snowy-white-rabbit"
            ],
            [
                "filename" => "close-up-portrait-rabbit.jpg",
                "name" => "Flopsy",
                "breed" => "Mixed Breed",
                "slug" => "flopsy-mixed-breed"
            ],
            [
                "filename" => "close-up-rabbit-by-carrot-sitting-field.jpg",
                "name" => "Peter",
                "breed" => "Mixed Breed",
                "slug" => "peter-mixed-breed"
            ],
            [
                "filename" => "close-up-rabbits.jpg",
                "name" => "Cottontail",
                "breed" => "Mixed Breed",
                "slug" => "cottontail-mixed-breed"
            ],
            [
                "filename" => "cool-easter-bunny-with-sunglasses-colorful-background-generative-ai.jpg",
                "name" => "BunBun",
                "breed" => "Mixed Breed",
                "slug" => "bunbun-mixed-breed"
            ],
            [
                "filename" => "easter-greeting-card-cute-fluffy-beige-rabbit-with-carrot-white-background-minimalistic-banne.jpg",
                "name" => "Hopper",
                "breed" => "Beige Rabbit",
                "slug" => "hopper-beige-rabbit"
            ],
            [
                "filename" => "easter-greeting-card-fluffy-beige-rabbit-with-carrot-blue-background-minimalistic-banner-with.jpg",
                "name" => "Nibbles",
                "breed" => "Beige Rabbit",
                "slug" => "nibbles-beige-rabbit"
            ],
            [
                "filename" => "fluffy-bunny-nibbling-carrot.jpg",
                "name" => "Bunny",
                "breed" => "Mixed Breed",
                "slug" => "bunny-mixed-breed"
            ],
            [
                "filename" => "gray-fluffy-rabbit-looking-signboard-isolated-white-background-easter-bunny.jpg",
                "name" => "Dusty",
                "breed" => "Gray Rabbit",
                "slug" => "dusty-gray-rabbit"
            ],
            [
                "filename" => "little-bunny-holding-empty-plate-mock-up.jpg",
                "name" => "Carrot",
                "breed" => "Mixed Breed",
                "slug" => "carrot-mixed-breed"
            ],
            [
                "filename" => "little-gray-rabbit-with-apple-yellow-background.jpg",
                "name" => "Apple",
                "breed" => "Gray Rabbit",
                "slug" => "apple-gray-rabbit"
            ],
            [
                "filename" => "rabbit-grassy-field.jpg",
                "name" => "Grass",
                "breed" => "Mixed Breed",
                "slug" => "grass-mixed-breed"
            ],
            [
                "filename" => "rabbit-is-standing-front-yellow-background.jpg",
                "name" => "Sunny",
                "breed" => "Mixed Breed",
                "slug" => "sunny-mixed-breed"
            ],
            [
                "filename" => "rabbit-wearing-sunglasses-colorful-backgroundgenerative-ai.jpg",
                "name" => "CoolBun",
                "breed" => "Mixed Breed",
                "slug" => "coolbun-mixed-breed"
            ],
            [
                "filename" => "rabbit-yellow-background-domestic-animal-pet-copyspace-spring-easter.jpg",
                "name" => "Spring",
                "breed" => "Mixed Breed",
                "slug" => "spring-mixed-breed"
            ],
            [
                "filename" => "woman-holding-cute-funny-rabbit-hands-closeup.jpg",
                "name" => "BunBun",
                "breed" => "Mixed Breed",
                "slug" => "bunbun-mixed-breed-2"
            ],
        ]
    ];

    public function index()
    {
        $images = self::$images;
        $categories = array_keys($images);
        return view('pages.website.home', compact('images', 'categories'));
    }

    public function show($slug)
    {
        $images = self::$images;
        $categories = array_keys($images);
        $animalDetails = collect($images)->map(function ($category) use ($slug) {
            return collect($category)->filter(function ($image) use ($slug) {
                return $image['slug'] === $slug;
            });
        })->flatten()->first();
        return view('pages.website.animal-detail', compact('categories', 'animalDetails'));
    }

    public function contactUs()
    {
        return view('pages.website.contact-us');
    }

    public function aboutUs()
    {
        return view('pages.website.about-us');
    }

    public function planes()
    {
        return view('pages.website.planes');
    }

    public function faqs()
    {
        $faqs = [
            [
                "question" => "¿Cómo hago un anuncio?",
                "answer" => "An FAQ section can be used to quickly answer common questions about your business like 'Where do you ship to?', 'What are your opening hours?', or 'How can I book a service?'."
            ],
            [
                "question" => "¿Cómo puedo pagar un anuncio?",
                "answer" => "FAQs are a great way to help site visitors find quick answers to common questions about your business and create a better navigation experience."
            ],
            [
                "question" => "¿Puedo renovar un plan que ya venció?",
                "answer" => "FAQs can be added to any page on your site or to your Wix mobile app, giving access to members on the go."
            ],
            [
                "question" => "How do I add a new question & answer?",
                "answer" => "
                    To add a new FAQ follow these steps:
                    1. Manage FAQs from your site dashboard or in the Editor
                    2. Add a new question & answer
                    3. Assign your FAQ to a category
                    4. Save and publish.
                    You can always come back and edit your FAQs.
                "
            ],
            [
                "question" => "Can I insert an image, video, or GIF in my FAQ?",
                "answer" => "
                    Yes. To add media follow these steps:
                    1. Manage FAQs from your site dashboard or in the Editor
                    2. Create a new FAQ or edit an existing one
                    3. From the answer text box click on the video, image or GIF icon
                    4. Add media from your library and save.
                "
            ],
            [
                "question" => "How do I edit or remove the 'Frequently Asked Questions' title?",
                "answer" => "
                    You can edit the title from the FAQ 'Settings' tab in the Editor.
                    To remove the title from your mobile app go to the 'Site & App' tab in your Owner's app and customize.
                "
            ]
        ];

        return view('pages.website.faqs', compact('faqs'));
    }

    public function blogs()
    {
        $blogs = collect([
            [
                'slug' => 'blog-1-slug',
                'image' => 'blog-1.jpeg',
                'title' => 'El procedimiento correcto para bañar a tu perro en casa: ¡Consejos útiles para un baño seguro y feliz!',
                'author' => 'Carolina Castro',
                'published_at' => \Carbon\Carbon::create(2024, 5, 6),
                'read_time' => 2,
                'views' => 2,
                'comments_count' => 0,
            ],
            [
                'slug' => 'blog-2-slug',
                'image' => 'blog-2.jpeg',
                'title' => 'Los beneficios de tener contacto con los animales desde la infancia',
                'author' => 'Carolina Castro',
                'published_at' => \Carbon\Carbon::create(2024, 5, 6),
                'read_time' => 3,
                'views' => 1,
                'comments_count' => 0,
            ],
            [
                'slug' => 'blog-3-slug',
                'image' => 'blog-2.jpeg',
                'title' => 'Otro título de blog',
                'author' => 'Carolina Castro',
                'published_at' => \Carbon\Carbon::create(2024, 5, 6),
                'read_time' => 3,
                'views' => 1,
                'comments_count' => 0,
            ],
        ]);

        return view('pages.website.blogs', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        return view('pages.website.blog-detail');
    }

    public function lostAndFound()
    {
        return view('pages.website.lost-n-found');
    }

    public function privacyPolicy()
    {
        return view('pages.website.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('pages.website.terms-and-conditions');
    }

    public function publishAd()
    {
        return view('pages.website.publish');
    }

}
