# ListenUp

Anyone studying a new language knows how complicated the process of fully understanding numbers can be. Keeping that in mind, "ListenUp" was developed to help language learners improve their listening skills regarding numbers.

# Start

![Start page](https://github.com/MVAPereira/listenUp/blob/main/start_page.png)

# Main Page

![Main page](https://github.com/MVAPereira/listenUp/blob/main/main_page.png)

The page operates similarly to a game: you listen to an audio clip of a random number in your target language, then you try to guess it right by typing or guessing and pressing the "Go!" button. If you get it right, you'll receive a thumbs up; if wrong, a thumbs down. If you find the current audio too difficult, you can skip it and try a different one.

# Settings

```php
$language = 'en-US';

$min_random_number = 0;
$max_random_number = 100;
```

The variables "min_random_number" and "max_random_number" can be changed so that the randomly generated number will fall within a larger interval. As for the variable "language," this can be modified to include the Google parameter for the denomination of 'language-COUNTRY'.


