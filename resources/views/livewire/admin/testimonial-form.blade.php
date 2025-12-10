<div>
    <form wire:submit="save">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Client Name -->
            <div class="form-group">
                <label class="form-label">Nama Client *</label>
                <input type="text" wire:model="client_name" class="form-control" required>
                @error('client_name') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Client Position -->
            <div class="form-group">
                <label class="form-label">Jabatan *</label>
                <input type="text" wire:model="client_position" class="form-control" required>
                @error('client_position') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Client Company -->
        <div class="form-group">
            <label class="form-label">Nama Perusahaan *</label>
            <input type="text" wire:model="client_company" class="form-control" required>
            @error('client_company') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <!-- Testimonial Text -->
        <div class="form-group">
            <label class="form-label">Testimonial *</label>
            <textarea wire:model="testimonial_text" class="form-control" rows="5" required placeholder="Masukkan testimonial dari client..."></textarea>
            @error('testimonial_text') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <!-- Rating -->
            <div class="form-group">
                <label class="form-label">Rating *</label>
                <select wire:model="rating" class="form-control" required>
                    <option value="5.0">⭐⭐⭐⭐⭐ (5.0)</option>
                    <option value="4.5">⭐⭐⭐⭐½ (4.5)</option>
                    <option value="4.0">⭐⭐⭐⭐ (4.0)</option>
                    <option value="3.5">⭐⭐⭐½ (3.5)</option>
                    <option value="3.0">⭐⭐⭐ (3.0)</option>
                </select>
                @error('rating') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Is Active -->
            <div class="form-group">
                <label class="form-label">Status</label>
                <select wire:model="is_active" class="form-control">
                    <option value="1">Active (Tampil di Website)</option>
                    <option value="0">Inactive (Tidak Tampil)</option>
                </select>
                @error('is_active') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Display Order -->
            <div class="form-group">
                <label class="form-label">Urutan Tampil</label>
                <input type="number" wire:model="display_order" class="form-control" min="0">
                @error('display_order') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Avatar Upload -->
        <div class="form-group">
            <label class="form-label">Foto Client (Optional)</label>
            <input type="file" wire:model="client_avatar" class="form-control" accept="image/*">
            @error('client_avatar') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">Max 2MB. Jika tidak diupload, akan menggunakan icon default.</p>
            
            @if ($client_avatar)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Preview Foto Baru:</p>
                    <img src="{{ $client_avatar->temporaryUrl() }}" alt="Preview" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                </div>
            @elseif($existing_avatar)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Foto Saat Ini:</p>
                    <img src="{{ asset('storage/' . $existing_avatar) }}" alt="Current" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">Upload foto baru untuk mengubah</p>
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                <span wire:loading.remove>
                    <i class='bx bx-save'></i> {{ $testimonialId ? 'Update' : 'Tambah' }} Testimonial
                </span>
                <span wire:loading>
                    <i class='bx bx-loader bx-spin'></i> Menyimpan...
                </span>
            </button>
            <a href="{{ route('admin.testimonials.index') }}" class="btn" style="margin-left: 10px;">Batal</a>
        </div>
    </form>
</div>

<style>
    .form-group {
        margin-bottom: 20px;
    }
    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--dark);
    }
    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid var(--border);
        border-radius: 8px;
        font-size: 14px;
    }
    .form-control:focus {
        outline: none;
        border-color: var(--primary);
    }
</style>
