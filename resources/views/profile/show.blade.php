<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif

            <x-jet-section-border/>

                <div>
                    <x-jet-action-section>
                        <x-slot name="title">
                            {{ __('Billing Details') }}
                        </x-slot>

                        <x-slot name="description">
                            {{ __('You will be able to update your credit card, change your subscription plan or cancel your account.') }}
                        </x-slot>

                        <x-slot name="content">

                            <h3 class="text-lg font-medium text-gray-900">
                                You can manage your subscription here.
                            </h3>

                            <div class="mt-3 max-w-xl text-sm text-gray-600">
                                <p>
                                    I've been working on improving this software so you can grow and monetize your podcast with ease!
                                     This means the cancellation button/feature got pushed to the side. You can easily cancel by email me :)
                                </p>
                            </div>

                            <div class="pt-5">
                                <a href="mailto:support@theimpeccableinvestor.com">
                                    <x-jet-danger-button>
                                        {{ __('Cancel') }}
                                    </x-jet-danger-button>
                                </a>
                            </div>

                        </x-slot>

                    </x-jet-action-section>
                </div>
        </div>
    </div>
</x-app-layout>
