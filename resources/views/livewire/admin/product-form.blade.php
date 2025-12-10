<div>
    <form wire:submit="save" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Title -->
            <div class="form-group">
                <label class="form-label">Title *</label>
                <input type="text" wire:model="title" class="form-control" required>
                @error('title') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Status -->
            <div class="form-group">
                <label class="form-label">Status *</label>
                <select wire:model="status" class="form-control" required>
                    <option value="completed">Completed</option>
                    <option value="in_progress">In Progress</option>
                    <option value="planned">Planned</option>
                </select>
                @error('status') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Summary -->
        <div class="form-group">
            <label class="form-label">Summary</label>
            <textarea wire:model="summary" class="form-control" rows="3"></textarea>
            @error('summary') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <!-- Description -->
        <div class="form-group">
            <label class="form-label">Description</label>
            <textarea wire:model="description" class="form-control" rows="5"></textarea>
            @error('description') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Tech Stack -->
            <div class="form-group">
                <label class="form-label">Tech Stack</label>
                <input type="text" wire:model="tech_stack" class="form-control" placeholder="e.g., Laravel, Vue.js, MySQL">
                @error('tech_stack') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Client -->
            <div class="form-group">
                <label class="form-label">Client</label>
                <input type="text" wire:model="client" class="form-control">
                @error('client') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Project URL -->
        <div class="form-group">
            <label class="form-label">Project URL</label>
            <input type="url" wire:model="project_url" class="form-control" placeholder="https://example.com">
            @error('project_url') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <!-- Image Upload -->
        <div class="form-group">
            <label class="form-label">Product Image</label>
            <input type="file" wire:model="image" class="form-control" accept="image/*">
            @error('image') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            
            @if ($image)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Preview Gambar Baru:</p>
                    <img src="{{ $image->temporaryUrl() }}" alt="Preview" style="max-width: 300px; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                </div>
            @elseif($existing_image)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $existing_image) }}" alt="Current" style="max-width: 300px; max-height: 200px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">Upload gambar baru untuk mengubah</p>
                </div>
            @endif
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Started At -->
            <div class="form-group">
                <label class="form-label">Started At</label>
                <input type="date" wire:model="started_at" class="form-control">
                @error('started_at') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Ended At -->
            <div class="form-group">
                <label class="form-label">Ended At</label>
                <input type="date" wire:model="ended_at" class="form-control">
                @error('ended_at') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                <span wire:loading.remove>
                    <i class='bx bx-save'></i> {{ $productId ? 'Update' : 'Create' }} Product
                </span>
                <span wire:loading>
                    <i class='bx bx-loader bx-spin'></i> Saving...
                </span>
            </button>
            <a href="{{ route('admin.products.index') }}" class="btn" style="margin-left: 10px;">Cancel</a>
        </div>
    </form>
</div>
