<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Etapa 1 de 4') }}
        </h2>

    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="age" :value="__('Idade')" />
            <x-text-input id="age" name="age" type="number" class="mt-1 block w-full"  required autofocus autocomplete="age" />
            <x-input-error class="mt-2" :messages="$errors->get('age')" />
        </div>

        <div>
            <x-input-label for="age_type" :value="__('Idade em (Meses / Ano)')" />
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="y" selected>Ano(s)</option>
                <option value="m">Mes(s)</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('age_type')" />
        </div>

        <div>
            <x-input-label for="age_type" :value="__('Genero')" />
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="m" selected>Masculino</option>
                <option value="f">Femenino</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('age_type')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Seguinte') }}</x-primary-button>
            <x-secondary-button>{{ __('Cancelar') }}</x-secondary-button>
        </div>
    </form>
</section>
