<div class="mb-3">
    <label for="" class="form-label">Locations : </label>
    <label>
        <input type="radio" name="locations" class="locations" value="1"
               {{ old('locations') == 1 ? 'checked' : null }} /> Hà Nội
    </label>

    <label>
        <input type="radio" name="locations" class="locations" value="2"
               {{ old('locations') == 2 ? 'checked' : null }} /> Hồ Chí Minh
    </label>

    <label>
        <input type="radio" name="locations" class="locations" value="3"
               {{ old('locations') == 3 ? 'checked' : null }} /> Đà Nẵng
    </label>

    <label>
        <input type="radio" name="locations" class="locations" value="4"
               {{ old('locations') == 4 ? 'checked' : null }} /> Cần Thơ
    </label>

    <div class="form-info <?= old('locations') == 4 ? 'd-none' : false ?>" id="detailInfo">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="" class="col-form-label">Người phụ thuộc</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="person_dependent" value="{{ old('person_dependent') }}" />
            </div>
            @error('person_dependent')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="" class="col-form-label">Số năm kinh nghiệm</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="year_experience" value="{{ old('year_experience') }}" />
            </div>
            @error('year_experience')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="" class="col-form-label">Facebook URL</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="facebookUrl" value="{{ old('facebookUrl') }}" />
            </div>
            @error('facebookUrl')
            <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
