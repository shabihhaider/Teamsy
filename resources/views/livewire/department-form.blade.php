<div class="mt-5">
    <input  wire:model="name" type="text"></br>
    @error('name') <span style="color: red;">{{ $message }}</span> @enderror </br>
    <button wire:click="submit">Submit</button>

    @if($success) <div>Saved</div> @endif
</div>
