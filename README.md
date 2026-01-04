# wordpress-dynamic-skin-hair-analysis-quiz
🛠️ Installation
Templates: Upload page-skin-quiz.php aur page-hair-quiz.php ko apne theme folder mein copy karein.

Logic: functions.php wala AJAX code apne theme ki functions.php file mein paste karein.

Pages: WordPress Dashboard mein 2 naye pages banayein aur unka Page Template tabdeeli karke "Skin Quiz" aur "Hair Quiz" select karein.

⚙️ How it Works (Logic)
Yeh quiz AJAX par chalta hai, yani page refresh kiye baghair results dikhata hai.

Jab user options select karta hai, to JavaScript un values ko backend (PHP) bhejti hai.

Backend code user ki selection ke sath automatic skin- ya hair- ka prefix (shuruat) laga deta hai.

System sirf unhi products ko dhoondta hai jin par wo specific prefixed tags lage hote hain. Is tarah Hair aur Skin ke products aapas mein mix nahi hote.

🏷️ How to Add Tags (The Rule)
Quiz ko sahi se chalane ke liye products par Tags lagana lazmi hai. Hamesha niche diye gaye format mein tags add karein:

1. Hair Products Tags
Scalp Type: hair-oily, hair-dry, hair-dandruff, hair-normal

Concerns: hair-fall, hair-frizz, hair-damage, hair-thinning

2. Skin Products Tags
Skin Type: skin-oily, skin-dry, skin-normal, skin-combination

Concerns: skin-pimples, skin-dark-spots, skin-open-pores, skin-dryness

Note: Hamesha Small Letters aur Dashes (-) ka istemal karein. Agar aap product par tag hair-dry lagayenge, tabhi wo Hair Quiz ke "Dry" option par show hogi.