# CampaignCast – Phase 3: Campaign Sending

## Description
Implementation of notification sending with Redis queue, including Viber as an additional channel.

## Features
- **Queue System**: Redis for asynchronous processing.
- **Scheduling**: `scheduled_at` for campaigns.
- **Templating**: Simple templates (e.g., "Hello {name}").
- **Notification Channels**:
    - Email (Laravel Mail).
    - SMS (Twilio, swappable via DI).
    - WebPush (VAPID + `web-push-php`).
    - Viber (Viber Business API, swappable via DI).
- **Client API**:
    - Start campaign: POST `/api/campaigns/{id}/send`.
    - Status tracking: GET `/api/campaigns/{id}/recipients`.
- **Admin API**:
    - GET `/api/admin/campaigns/{id}/recipients`.
- **Frontend (Blade)**:
    - Client: Campaign status tracking.
    - Admin: Sending oversight.

## Notes
Focus on message sending.
