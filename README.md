# Real-Time Chat with Laravel Reverb

This is a real-time chat application built using Laravel, Livewire, and Reverb. The application allows users to join chat rooms and send messages instantly.

---
## Features
- **Real-Time Messaging**: Instant message delivery in chat rooms.
- **User Authentication**: Secure login and registration using Laravel Breeze.
- **Broadcasting**: Real-time broadcasting of messages to all users in a chat room using Laravel Reverb.

---

## Technologies Used

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


2. **Install dependencies:**:
```bash
   composer install
```


3. **Set up your environment file:**
```bash
   cp .env.example .env
```


4. **Generate application key:**
```bash
    php artisan key:generate
```


5. **Run migrations:**
```bash
    php artisan migrate 
```


6. **Install Livewire:**
```bash
   composer require livewire/livewire
```

   
7. **Install Laravel Reverb:**
```bash
   composer require laravel/reverb
```


8. **Start the Reverb server:**
```bash
   php artisan reverb:start
```


9. **Install frontend dependencies:**
```bash
   npm install
   npm run dev
```


10. **Start the Laravel server:**
```bash
   php artisan serve
```
   

