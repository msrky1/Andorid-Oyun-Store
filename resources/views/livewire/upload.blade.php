
<div>
    <input type="file" placeholder="upload" wire:model="photo">  

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button wire:click.prevent="save">Save Photo</button>
 </div>


