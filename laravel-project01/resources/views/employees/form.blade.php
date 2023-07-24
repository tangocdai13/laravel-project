@extends('layouts.admin')

@section('title', 'Create Customer')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <h2>Form Employee</h2>
                        <form action="{{ route('employee.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name Employee</label>
                                <input type="text" class="form-control" name="name" placeholder="Name..." value="{{ old('name') }}">
                                @error('name')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Email Employee</label>
                                <input type="text" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}">
                                @error('email')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Phone Employee</label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone..." value="{{ old('phone') }}">
                                @error('phone')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Address Employee</label>
                                <input type="text" class="form-control" name="address" placeholder="Address..." value="{{ old('address') }}">
                                @error('address')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Gender : </label>
                                <label>
                                    <input type="radio" name="gender"  value="1" {{ old('gender') == 1 ? 'checked' : null }}/> Female
                                </label>

                                <label>
                                    <input type="radio" name="gender"  value="2" {{ old('gender') == 2 ? 'checked' : null }} /> Male
                                </label>
                                @error('gender')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            @include('employees.info ')

                            <div class="mb-3">
                                <button type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endpush
