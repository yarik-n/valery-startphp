<?php
echo "Hello World!";
echo "Hello";
echo 1+2;
$countries = ["Canada","Italy","Australia","United States"];
    echo $countries[2];
$pets = ["dog","cat","bird"];
    echo $pets[1];
$person = [
    "name" => "Valentine",
    "surname" => "Green",
    "age" => 25,
    "pets" => ["dog",
              "cat",
              "bird",
    ]
    ];

echo $person['pets'][2];
echo $person['name'];
foreach ($countries as $country)
{
    echo $country;
}

foreach ($pets as $pet)
{
    echo $pet;
}