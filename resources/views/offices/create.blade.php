<x-layout :title="'Create Office'">
    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            <div class="w-full max-w-5xl p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @if (session('message'))
                    <x-forms.alert :status="session('status')" :message="session('message')" :alertClass="session('alert-class')" />
                @endif
                <x-heading>Add New Office</x-heading>
                <x-forms.form action="{{ route('offices.store') }}" method="POST">
                    <x-forms.input label="* Code" name="code" class="uppercase" />
                    <x-forms.input label="* Name" name="name" class="uppercase" />
                    <x-forms.select label="Head of Office" name="head_id">
                        <option value="">- Select Head of Office -</option>
                    </x-forms.select>
                    <x-forms.field class="flex justify-center items-center mt-5">
                        <x-forms.submit-button>
                            Save Office
                        </x-forms.submit-button>
                    </x-forms.field>

                </x-forms.form>
            </div>
        </div>
    </div>
</x-layout>
