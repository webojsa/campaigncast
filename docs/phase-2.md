# CampaignCast – Phase 2: Campaign Logic

## Description
Implementation of campaign logic, including end-user registration and admin functionalities, without sending messages.

## Features
- **Client API**:
    - End-user registration: POST `/api/client-users` (filtered by `client_id`).
    - Campaign creation: POST `/api/campaigns`.
    - Campaign tracking: GET `/api/campaigns`, GET `/api/campaigns/{id}`.
- **Admin API (prefix `/admin`)**:
    - View all clients: GET `/api/admin/clients`.
    - View all campaigns: GET `/api/admin/campaigns`.
    - User management: GET/POST `/api/admin/client-users`.
- **Frontend (Blade)**:
    - Client: `/campaigns`, `/campaigns/create`, `/client-users`.
    - Admin: `/admin/clients`, `/admin/campaigns`, `/admin/client-users`.
- **Tags**: Basic support for user grouping.

## Notes
Focus on campaign and user management, without sending.
