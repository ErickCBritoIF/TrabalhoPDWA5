<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/cadastrar" method="POST">
                    @csrf <!-- token de formulário -->
                    <!-- Nome -->
                    <div>
                        <x-input-label for="Nome" :value=" ('Nome do Elemento Químico')" />
                        <x-text-input id="Nome" class="block mt-1 w-full" type="text" name="Nome" :value="old('Nome')" maxlength="50" required autofocus autocomplete="Nome" />
                        <x-input-error :messages="$errors->get('Nome')" class="mt-2" />
                    </div>
                    <!-- SimboloQuimico -->
                    <div class="mt-4">
                        <x-input-label for="SimboloQuimico" :value=" ('Símbolo Químico')" />
                        <x-text-input id="SimboloQuimico" class="block mt-1 w-full" type="text" name="SimboloQuimico" :value="old('SimboloQuimico')" maxlength="10" required autofocus autocomplete="SimboloQuimico" />
                        <x-input-error :messages="$errors->get('SimboloQuimico')" class="mt-2" />
                    </div>
                    <!-- NumeroAtomico -->
                    <div class="mt-4">
                        <x-input-label for="NumeroAtomico" :value=" __('Número Atômico')" />
                        <x-text-input id="NumeroAtomico" class="block mt-1 w-full" type="number" name="NumeroAtomico" :value="old('NumeroAtomico')" required autocomplete="NumeroAtomico" />
                        <x-input-error :messages="$errors->get('NumeroAtomico')" class="mt-2" />
                    </div>
                    <!-- MassaAtomica -->
                    <div class="mt-4">
                        <x-input-label for="MassaAtomica" :value="__('Massa Atômica')" />
                        <x-text-input id="MassaAtomica" class="block mt-1 w-full" type="number" step="any" name="MassaAtomica" :value="old('MassaAtomica')" required autocomplete="MassaAtomica" />
                        <x-input-error :messages="$errors->get('MassaAtomica')" class="mt-2" />
                    </div>

                    <!-- EstadoFisico -->
                    <div class="mt-4">
                        <x-input-label for="EstadoFisico" :value="__('Estado Físico')" />
                        <select id="EstadoFisico" class="block mt-1 w-full" name="EstadoFisico" required autofocus>
                            <option value="" {{ old('EstadoFisico') == '' ? 'selected' : '' }}>Selecione o estado físico</option>
                            <option value="Sólido" {{ old('EstadoFisico') == 'Sólido' ? 'selected' : '' }}>Sólido</option>
                            <option value="Líquido" {{ old('EstadoFisico') == 'Líquido' ? 'selected' : '' }}>Líquido</option>
                            <option value="Gasoso" {{ old('EstadoFisico') == 'Gasoso' ? 'selected' : '' }}>Gasoso</option>
                        </select>
                        <x-input-error :messages="$errors->get('EstadoFisico')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4"> {{ __('Cadastro') }}
                        </x-primary-button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
