<div class="flex justify-center mt-8">
    <form action="">
        <textarea wire:model.live="message" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded" ></textarea>
    </form>

    <p>
        {{ $message }}
    </p>
</div>
