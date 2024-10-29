# Real-Time Chat with Laravel Reverb

This is a real-time chat application built using Laravel, Livewire, and Reverb. The application allows users to join chat rooms and send messages instantly.

---
## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies)
- [Installation](#installation)

---
## Features
- **Real-Time Messaging**: Instant message delivery in chat rooms.
- **User Authentication**: Secure login and registration using Laravel Breeze.
- **Broadcasting**: Real-time broadcasting of messages to all users in a chat room using Laravel Reverb.

---

## Technologies

- **Backend**: Laravel 11
- **Frontend**: Livewire and Blade templates with Bootstrap
- **Real-Time Communication**: Laravel Reverb
- **Database**: MySQL

---

## Installation

Follow these steps to set up the application locally:

### 1. Clone the repository:

```bash
git clone https://github.com/shroukelzoghby/real-time-chat-reverb.git
cd real-time-chat-reverb
``` 


### 2. Install dependencies:
```bash
composer install
```


### 3. Set up your environment file:
```bash
cp .env.example .env
```


### 4. Generate application key:
```bash
php artisan key:generate
```

### 5. Set up the database:

Create a new MySQL database (or any other supported database) and configure the connection in your **.env** file:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password```
```

### 6. Run migrations:
```bash
php artisan migrate 
```


### 7. Install Livewire:
```bash
composer require livewire/livewire
```

   
### 8. Install Laravel Reverb:
```bash
composer require laravel/reverb
```


### 9. Start the Reverb server:
```bash
php artisan reverb:start
```


### 10. Install frontend dependencies:
```bash
npm install
npm run dev
```


### 11. Start the Laravel server:
```bash
php artisan serve
```
   

