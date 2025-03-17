# CampaignCast – General Overview and Architecture

## Purpose
**CampaignCast** is a scalable notification system with an API and a simple frontend, divided into client and admin sections, developed in **Laravel 12**.

## Architecture
- **Backend**: Laravel 12 (PHP 8.3 or higher).
- **Database**: MySQL.
    
- **Authentication**:
    - Sanctum: Tokens for API, sessions for web.
    - Fortify: Backend authentication logic.
    - Socialite: Google login.
    - Routes: `/api/auth/*` (e.g., `/api/auth/register`).
- **API Structure**:
    - Client: `/api/*` (e.g., `/api/campaigns`), filtered by `client_id`.
    - Admin: `/api/admin/*` (e.g., `/api/admin/clients`), protected by `is_admin` middleware.
- **Queue System**:
    - Phase 2: Redis (`predis/predis`).
    - Phase 3: RabbitMQ via DI (`QueueServiceInterface`).
- **Notification Channels**:
    - Email: Laravel Mail.
    - SMS: DI (`SmsServiceInterface`), initially Twilio.
    - WebPush: VAPID + `web-push-php`.
    - Viber: DI (`NotificationServiceInterface` or extended `SmsServiceInterface`), initially Viber Business API (e.g., Infobip).
- **Frontend**: Blade for basic forms, later Vue.js/Livewire option.
- **Authorization**: Middleware for `role` checks (`admin` vs. `client`).

## Development Phases
- [Phase 1: Basics and Authentication](docs/phase-1.md)
- [Phase 2: Campaign Logic](docs/phase-2.md)
- [Phase 3: Campaign Sending](docs/phase-3.md)
- [Phase 4: Expansion and Scalability](docs/phase-4.md)
