<h1 align="center">SilentVista - Sign Language Learning Web Application and Detection</h1>
<h2>🔭 Project Brief</h2>

#### Welcome to SilentVista - Your best companion for learning sign language easily and joyfully. We provide an affordable and inclusive learning experience, allowing anyone to acquire new skills in communicating through sign language. With guidance from experienced instructors and specially designed content, you'll discover the beauty and practicality of learning sign language, opening doors to deeper connectivity within a broader community. Join us and explore the power of expression beyond words in the world of sign language.

## 🛠️ Web Application Installation Steps

1. Clone the repository

```bash
git clone https://github.com/Andregit93/silentVista.git
```

2. Change the working directory

```bash
cd silentVista
```

3. Install dependencies

```bash
composer install
```

4. Copy .env.example file to .env on the root folder

```bash
cp .env.example .env
```

5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

6. Run the generate:key

```bash
php artisan key:generate
```

6. Run the migration and seeder

```bash
php artisan migrate: fresh --seed
```

7. Run the app

```bash
php artisan serve
npm run dev
```

## 🛠️ Detection System Installation Steps

1. Change the working directory

```bash
cd DetectionApp
```

2. Install dependencies

```bash
pip install -r requirement.py
```

3. Run the Detection App

```bash
python classifier.py
```

4. Run the Detection App with audio output

```bash
python classifier_w_audio_output.py
```

### If you want to create a new model for your system, follow the steps below : 

1. Run the image collect program

```bash
python imgcollect.py
```

2. Run the landmarks program

```bash
python landmarks.py
```

3. Run the train model program 

```bash
python train.py
```


## 🏆 Contributor

1. Andre Sevtian (210741048)
2. Yuniarni (210741022)
3. Farhanah Fadiah Fatin (210741038)
4. Jordi(210741036)

<h3 align="left">Languages and Tools:</h3>
<p align="left"><a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.python.org/" target="_blank" rel="noreferrer"> <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original-wordmark.svg" alt="python" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> </p>
