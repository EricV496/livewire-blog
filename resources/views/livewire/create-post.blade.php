<div>
    <x-danger-button wire:click="$set('isOpen', true)">
        Crear Nuevo Post
    </x-danger-button>

    <x-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            Crear nuevo post
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-label value="Título del Post" />
                <x-input type="text" class="w-full" wire:model="title"/>
            </div>
            <div class="mb-4">
                <x-label value="Contenido del Post" />
                <textarea name="content" cols="30" rows="6" class="form-control w-full" wire:model="content"></textarea>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('isOpen', false)">
               Cancelar 
            </x-secondary-button>
            <x-danger-button wire:click="save">
               Crear
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
