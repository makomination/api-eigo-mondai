# api-eigo-mondai
An api created on Laravel providing English/Japanese notes for English/Japanese study

## Preparation
1. First of all, You need to create a json file. It must be the format below.
```json
[
{
"no": 1,
"point_no": 1,
"japanese": "これはペンです。",
"english": "This is a pen.",
"note": "最も基本的な文章"
},
{
"no": 2,
"point_no": 1,
"japanese": "私は人間です。",
"english": "I am a person",
"note": "簡単な文章"
},
(You can add notes as many as you want)
]
```
2. Put the json file in `storage/json`

## How to run
1. clone this project to your local.
1. go into the folder.
1. type `php artisan serve`
1. That's it! Now it works! \
  You can check it by accessing to 127.0.0.1:8000/api-tester
