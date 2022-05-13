<div class="mb-3">
    <label for="rayon" class="form-label">Status</label>
    <select name="status" id="" class="form-control" required>
        <option value="">- SELECT Status -</option>
        @foreach ($rayon as $item)
        <option value="{{ $item->rayon }}">{{ $item->rayon }}</option>
        @endforeach
    </select>
</div>