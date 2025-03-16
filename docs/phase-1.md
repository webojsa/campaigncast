# CampaignCast – Phase 1: Basics and Authentication

## Description
Setup of the system foundation with a focus on client and admin authentication.

## Features
- **Authentication (prefix `/auth`)**:
    - Client registration: Web form + API (`/api/auth/register`).
    - Client login: Web form + API (`/api/auth/login`).
    - Google login: Web + API (`/api/auth/login/google`).
    - Password reset: Web + API (`/api/auth/forgot-password`, `/api/auth/reset-password`).
- **Frontend (Blade)**:
    - Client: `/login`, `/register`.
    - Admin: `/admin/login`.
- **Roles**: `role` field (`admin`/`client`) for privilege separation.

## Notes
No campaign functionality; focus on authentication.
