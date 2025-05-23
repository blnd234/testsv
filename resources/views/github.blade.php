@extends('components.layouts.app')

@section('github')
<style>
    .container {
        width: 100%;
        max-width: 800px;
        padding: 20px;
        margin: 0 auto;
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
    }

    .header h1 {
        color: #f0876a;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .description {
        text-align: center;
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto 40px;
        color: #8b949e;
    }

    .profile-card {
        background-color: #21262d;
        border-radius: 8px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 0 auto;
        max-width: 400px;
    }

    .profile-image {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid #f0876a;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .username {
        font-size: 1.6rem;
        margin-bottom: 20px;
        color: white;
        display: flex;
        align-items: center;
    }

    .username span {
        color: #f0876a;
    }

    .stats {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 10px;
        flex-wrap: wrap;
    }

    .stat-item {
        display: flex;
        align-items: center;
        color: #8b949e;
        font-size: 1rem;
    }

    .stat-item svg {
        margin-right: 8px;
    }

    .underline {
        border-bottom: 2px solid #f0876a;
        padding-bottom: 3px;
    }

    @media (max-width: 480px) {
        .header h1 {
            font-size: 2rem;
        }

        .description {
            font-size: 1rem;
        }

        .profile-card {
            padding: 20px;
        }

        .username {
            font-size: 1.3rem;
        }

        .stat-item {
            font-size: 0.95rem;
        }
    }
</style>

<div class="container">
    <div class="profile-card">
        <div class="profile-image">
            <img src="{{ asset('assets/image/Me.JPG') }}">
        </div>

        <div class="username">
            <span>@</span>Blnd Baxtyar<span class="underline"></span>
        </div>

        <div class="stats">
            <div class="stat-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 9V19H3V9"></path>
                    <path d="M21 5H3V9H21V5Z"></path>
                    <path d="M9 14H15"></path>
                </svg>
                31 repositories
            </div>

            <div class="stat-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                476 followers
            </div>
        </div>
    </div>
</div>
@endsection
