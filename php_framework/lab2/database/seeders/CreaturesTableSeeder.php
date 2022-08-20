<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creatures')->insert([
            'name' => 'Octopus',
            'description' => '<p>An octopus is a soft-bodied, eight-limbed mollusc of the order Octopoda. The order consists of some 300 species and is grouped within the class Cephalopoda with squids, cuttlefish, and nautiloids. Like other cephalopods, an octopus is bilaterally symmetric with two eyes and a beaked mouth at the center point of the eight limbs. The soft body can radically alter its shape, enabling octopuses to squeeze through small gaps. They trail their eight appendages behind them as they swim. The siphon is used both for respiration and for locomotion, by expelling a jet of water. Octopuses have a complex nervous system and excellent sight, and are among the most intelligent and behaviourally diverse of all invertebrates.</p>',
            'size' => 'Upto 4.3 m (14 ft)',
            'color' => 'Gray, brown, pink, blue or green',
            'lifespan' => '6 months to 5 years',
            'image' => 'octopus.jpg'
        ]);
        DB::table('creatures')->insert([
            'name' => 'Fish',
            'description' => '<p>Fish are aquatic, craniate, gill-bearing animals that lack limbs with digits. Included in this definition are the living hagfish, lampreys, and cartilaginous and bony fish as well as various extinct related groups. Around 99% of living fish species are ray-finned fish, belonging to the class Actinopterygii, with over 95% belonging to the teleost subgrouping.
            The earliest organisms that can be classified as fish were soft-bodied chordates that first appeared during the Cambrian period. Although they lacked a true spine, they possessed notochords which allowed them to be more agile than their invertebrate counterparts. Fish would continue to evolve through the Paleozoic era, diversifying into a wide variety of forms. Many fish of the Paleozoic developed external armor that protected them from predators. The first fish with jaws appeared in the Silurian period, after which many (such as sharks) became formidable marine predators rather than just the prey of arthropods.</p>',
            'size' => '8 mm to 16 m (52 ft)',
            'color' => 'Dark to light black, gray, brown, orange, yellow or red',
            'lifespan' => 'A year to 200 years',
            'image' => 'fish.jpg'
        ]);
        DB::table('creatures')->insert([
            'name' => 'Sharks',
            'description' => '<p>Sharks are a group of elasmobranch fish characterized by a cartilaginous skeleton, five to seven gill slits on the sides of the head, and pectoral fins that are not fused to the head. Modern sharks are classified within the clade Selachimorpha (or Selachii) and are the sister group to the rays. However, the term "shark" has also been used to refer to extinct members of the subclass Elasmobranchii, which are technically outside the Selachimorpha clade. Notable examples of improper classification include Cladoselache, Xenacanthus, and various other members of the Chondrichthyes class like the holocephalid eugenedontidans.</p>',
            'size' => 'Up to 14 m (46 ft)',
            'color' => 'Light, warm, veiled gray wirh a red undertone',
            'lifespan' => '20 to 30 years',
            'image' => 'sharks.jpg'
        ]);
        DB::table('creatures')->insert([
            'name' => 'Crabs',
            'description' => "Crabs are generally covered with a thick exoskeleton, composed primarily of highly mineralized chitin, and armed with a pair of chelae (claws). Crabs vary in size from the pea crab, a few millimeters wide, to the Japanese spider crab, with a leg span up to 4 m (13 ft). Several other groups of crustaceans with similar appearances – such as king crabs and porcelain crabs – are not true crabs, but have evolved features similar to true crabs through a process known as carcinisation.
            Crabs are found in all of the world's oceans, as well as in fresh water and on land, particularly in tropical regions. About 850 species are freshwater crabs",
            'size' => 'With a leg span up to 4 m (13 ft)',
            'color' => 'Brown, muddy green or dull blue',
            'lifespan' => '3 to 5 years',
            'image' => 'crabs.jpg',
        ]);
        DB::table('creatures')->insert([
            'name' => 'Whales',
            'description' => 'Whales are a widely distributed and diverse group of fully aquatic placental marine mammals. They are an informal grouping within the infraorder Cetacea, which usually excludes dolphins and porpoises. Whales, dolphins and porpoises belong to the order Cetartiodactyla, which consists of even-toed ungulates. Their closest non-cetacean living relatives are the hippopotamuses, from which they and other cetaceans diverged about 54 million years ago. The two parvorders of whales, baleen whales (Mysticeti) and toothed whales (Odontoceti), are thought to have had their last common ancestor around 34 million years ago. Whales consist of eight extant families: Balaenopteridae (the rorquals), Balaenidae (right whales), Cetotheriidae (the pygmy right whale), Eschrichtiidae (the grey whale), Monodontidae (belugas and narwhals), Physeteridae (the sperm whale), Kogiidae (the dwarf and pygmy sperm whale), and Ziphiidae (the beaked whales).',
            'size' => '6 to 16 m',
            'color' => 'Shades of light to dark grey, blue and black',
            'lifespan' => '10 to 50 years',
            'image' => 'whales.jpg'
        ]);
        DB::table('creatures')->insert([
            'name' => 'Sea Turtles',
            'description' => "Seven different species of sea (or marine) turtles grace our ocean waters, from the shallow seagrass beds of the Indian Ocean, to the colorful reefs of the Coral Triangle and the sandy beaches of the Eastern Pacific. While these highly migratory species periodically come ashore to either bask or nest, sea turtles spend the bulk of their lives in the ocean. WWF's work on sea turtles focuses on five of those species: green, hawksbill, loggerhead, leatherback, and olive ridley.
            In general, sea turtles have a more fusiform body plan than their terrestrial or freshwater counterparts. This tapering at both ends reduces volume and means that sea turtles cannot retract their head and limbs into their shells for protection, unlike many other turtles and tortoises. However, the streamlined body plan reduces friction and drag in the water and allows sea turtles to swim more easily and swiftly.",
            'size' => '3 to 4 feet',
            'color' => 'Olive green, yellow, greenish-brown, reddish-brown, or black',
            'lifespan' => 'Up to 50 years or more',
            'image' => 'sea_turtles.jpg'
        ]);
    }
}
