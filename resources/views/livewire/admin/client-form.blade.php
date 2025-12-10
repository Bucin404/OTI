<div>
    <form wire:submit="save">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <!-- Company Name -->
            <div class="form-group">
                <label class="form-label">Nama Perusahaan *</label>
                <input type="text" wire:model="company_name" class="form-control" required>
                @error('company_name') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Industry Sector -->
            <div class="form-group">
                <label class="form-label">Sektor Industri *</label>
                <input type="text" wire:model="industry_sector" class="form-control" required placeholder="e.g., Energy, Banking, Manufacturing">
                @error('industry_sector') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label class="form-label">Deskripsi Perusahaan *</label>
            <textarea wire:model="description" class="form-control" rows="4" required placeholder="Masukkan deskripsi singkat tentang perusahaan..."></textarea>
            @error('description') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
            <!-- Icon Class -->
            <div class="form-group">
                <label class="form-label">Icon Class (Fallback) *</label>
                <input type="text" wire:model="icon_class" class="form-control" required placeholder="bx bx-building">
                @error('icon_class') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
                <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">
                    Boxicons class. Lihat: <a href="https://boxicons.com/" target="_blank" style="color: var(--primary);">boxicons.com</a>
                </p>
            </div>

            <!-- Is Featured -->
            <div class="form-group">
                <label class="form-label">Featured</label>
                <select wire:model="is_featured" class="form-control">
                    <option value="1">Ya (Tampil di Homepage)</option>
                    <option value="0">Tidak</option>
                </select>
                @error('is_featured') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>

            <!-- Display Order -->
            <div class="form-group">
                <label class="form-label">Urutan Tampil</label>
                <input type="number" wire:model="display_order" class="form-control" min="0">
                @error('display_order') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Logo Upload -->
        <div class="form-group">
            <label class="form-label">Logo Perusahaan (Optional)</label>
            <input type="file" wire:model="logo" class="form-control" accept="image/*">
            @error('logo') <span style="color: #EF4444; font-size: 14px;">{{ $message }}</span> @enderror
            <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">Max 2MB. Jika tidak diupload, akan menggunakan icon fallback.</p>
            
            @if ($logo)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Preview Logo Baru:</p>
                    <div style="width: 120px; height: 120px; border: 2px solid var(--border); border-radius: 12px; padding: 10px; display: flex; align-items: center; justify-content: center; background: white;">
                        <img src="{{ $logo->temporaryUrl() }}" alt="Preview" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </div>
                </div>
            @elseif($existing_logo)
                <div style="margin-top: 10px;">
                    <p style="font-weight: 600; margin-bottom: 8px;">Logo Saat Ini:</p>
                    <div style="width: 120px; height: 120px; border: 2px solid var(--border); border-radius: 12px; padding: 10px; display: flex; align-items: center; justify-content: center; background: white;">
                        <img src="{{ asset('storage/' . $existing_logo) }}" alt="Current" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </div>
                    <p style="font-size: 12px; color: #6B7280; margin-top: 5px;">Upload logo baru untuk mengubah</p>
                </div>
            @endif
        </div>

        <!-- Submit Button -->
        <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                <span wire:loading.remove>
                    <i class='bx bx-save'></i> {{ $clientId ? 'Update' : 'Tambah' }} Client
                </span>
                <span wire:loading>
                    <i class='bx bx-loader bx-spin'></i> Menyimpan...
                </span>
            </button>
            <a href="{{ route('admin.clients.index') }}" class="btn" style="margin-left: 10px;">Batal</a>
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
