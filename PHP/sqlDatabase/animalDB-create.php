<?php
require_once('../common.php');

// Clearly this is a very crude interface.
// A normal web site would never output raw text. Instead an admin login
// would trigger this and only would output errors if they occured.
// Ensure that:
//   $CFG->db_admin_prohibit_create_drop = FALSE;
// is set in config.php.
header('Content-Type: text/plain');
try
{
  echo "Creating users DB...\n";
  $db = new DBAnimal();
  $db->admin_create_all_structures();
  echo "Finished creating DB.\n";
}
catch (Exception $e)
{
  echo "EXCEPTION: ".$e->getMessage();
}

$db->insert('Angus', 'kangaroo', 'old', 'm', '/NAAC/Pictures/k-angus.jpg', 'Angus spends most of his leisure time working out, you can typically find him picking up the other kangaroos and putting them down. He is a crossfit junkie. If you are an active individual looking for a workout buddy, Angus is your man!');
$db->insert('Bella', 'dog', 'young', 'f', '/NAAC/Pictures/d-bella.JPG', 'Bella is a sassy and needy animal, she has been at NAAC for 4 months now but is actively searching for her fur-ever home. She sleeps in the bed with you and she will eat and go outside on her schedule. She is house trained but still chooses to do her business inside when she thinks you\'ve neglected her. Dispite her issues, she is very smart and can do 2 tricks: sit and dance. Bella is very food motivated and needs to be an only dog in her home.');
$db->insert('Chester', 'chicken', 'young', 'm', '/NAAC/Pictures/c-chester.jpeg', 'Meet Chester! Despite what you may think, he\'s not fat, he\'s big boned. Although he loves food, his new home will need to keep him on a strict diet. Chester used to be a circus chicken and has will eat absolutely anything on the ground so children are not ideal to be in his home. With being a circus chicken he does have some special skills, he is the only known chicken that can hula hoop!');
$db->insert('Christine', 'chicken', 'baby', 'f', '/NAAC/Pictures/c-christine.jpg', 'Currently on 48 hour trial period with a client, however we noticed on the way out the client was wearing a KFC uniform. Concered about wellbeing of Christine as she may now be chicken nuggets.');
$db->insert('Earl', 'cat', 'young', 'm', '/NAAC/Pictures/k-earl.jpeg', 'Earl is a ladies man at NAAC, because of this he is kept separate from the other male cats as he gets very protective of his ladies. He is hard-of-hearing and partially blind so his fur-ever home cannot have any stairs.');
$db->insert('Fefe', 'cat', 'young', 'f', '/NAAC/Pictures/k-fefe.jpg', 'Fefe has been with us for just over a week and he has stolen all of our hearts. Although he is completely blind in his left eye, he makes up for this with non-stop purring and wanting to be near his human. He wears a thundershirt to bed to help his anxiety and under no circumstances can he have catnip.');
$db->insert('Fluffy', 'dog', 'old', 'm', '/NAAC/Pictures/d-fluffy.jpg', 'Fluffy came into our care just yesterday so not much is known on him, we think he\'s a him. We are still trying to bond with him and make him comfortable in our center to truely understand the type of dog he is and find his perfect fur-ever home.');
$db->insert('Jason', 'dog', 'young', 'm', '/NAAC/Pictures/d-jason.jpg', 'Jason is a fun loving guy with lots of kisses to give. He is very playful and active with the other dogs and chickens, but he doesn\'t get along with cats or kangaroos. His favorite things are naps and dinner time. He is gentle giant but small children are not recommended due to his size.');
$db->insert('Lilly', 'dog', 'old', 'f', '/NAAC/Pictures/d-lilly.jpg', 'Lily is one of our more high maintenance dogs at NAAC. She likes baths and bows but will not walk on grass or gravel. She aspires to be a show dog but unfortunately cannot walk in a straight line and is always overlooked. She will melt your heart with her 5am \"singing\" when she whines to tell you she is ready to start the day!');
$db->insert('Lucky', 'chicken', 'old', 'm', '/NAAC/Pictures/c-lucky.jpg', 'Lucky is a fighter! She has survived 3 racoon attacks, all of which ended in her favor. She is very shy to new people but once she bonds with you, she will love you dearly and follow you wherever you go.');
$db->insert('Ricky', 'chicken', 'baby', 'm', '/NAAC/Pictures/c-ricky.jpg', 'Ricky is the runt of his litter, he is very curious and loves to play with his doggy friends. We will continue updating his bio as we learn more about him.');
$db->insert('Rowanda', 'kangaroo', 'young', 'f', '/NAAC/Pictures/k-rowanda.jpg', 'Rowanda came all the way out of South Africa, she was brought here to help baby kangaroos grow up with a mother figure. Rowanda has very strong mothering instincts so perhaps a small cuddly dog or cat in her fur-ever home would be an asset to help give her purpose. She will return all the love you give her and then some!');
$db->insert('Samantha', 'cat', 'old', 'f', '/NAAC/Pictures/k-samantha.png', 'Samantha, or Sam as she perfers, needs a special fur-ever home with only carpet. She will try to convince you that she is an indoor/outdoor cat but will start wandering and be lost within a heartbeat, which is why she is our 3rd time returning pet. She needs someone who will keep keep her company during all thunderstorms as she gets very rowdy and will destroy your furniture and most fixtures (including walls). ');
$db->insert('Tammy', 'cat', 'young', 'm', '/NAAC/Pictures/k-tammy.jpg', 'This is Tammy, dispite what she may tell you, she did not miss her lunch, or her breakfast, ever. Tammy is our star contestant on our version of the Biggest Loser, although she has actually gained 2lbs while on her diet, we think it\'s all muscle. She is loving and cuddly as long as you have food.');
$db->insert('Tim', 'chicken', 'young', 'm', '/NAAC/Pictures/c-tim.jpg', 'Tim is the center\'s most socialable pet. He would walk all over town if we ever let him off leash. We think he came from a farm in Quebec as he gets very excited when he hears people speaking French, so if you speak French or are willing to learn, make sure to include this in your application!');
$db->insert('Tupac', 'kangaroo', 'old', 'm', '/NAAC/Pictures/k-tupac.jpg', 'Meet Tupac, his name was given to him due to his love for the late rapper he is named after. He loves to race and tends to challenge other pets smaller than him, so he would need to be an only child in his home. He loves popcorn and can do a number of tricks including handstands! Tupac is not for a first time kangaroo owner, experience will be required');



?>
