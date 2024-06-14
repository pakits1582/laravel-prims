<x-layout :title="'Edit Office'">
    <div class="flex-1 p-4">
        <div class="flex justify-center items-center h-full">
            <!-- Centered form container -->
            <div class="w-full max-w-5xl p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
                @if (session('message'))
                    <x-forms.alert :status="session('status')" :message="session('message')" :alertClass="session('alert-class')" />
                @endif
                <x-heading>Edit Office</x-heading>
                <form action="{{ route('offices.update', $office->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <x-forms.input label="* Code" name="code" class="uppercase" value="{{ $office->code ?? '' }}" />
                    <x-forms.input label="* Name" name="name" class="uppercase" value="{{ $office->name ?? '' }}" />
                    <x-forms.select label="Head of Office" name="head_id">
                        <option value="">- Select Head of Office -</option>
                    </x-forms.select>
                    <x-forms.field class="flex justify-center items-center mt-5">
                        <x-forms.submit-button>
                            Update Office
                        </x-forms.submit-button>
                    </x-forms.field>
                </form>
            </div>
        </div>
    </div>
</x-layout>
