@extends('layouts.dash')
@section('content')
    <style>
        path {
            display: none;
        }

        svg {
            display: none;
        }

    </style>
    <!--wrapper-->
    <div class="wrapper">
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Lists of Voters Registered</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Lists</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                @include('inc.msg')
                <div class="d-lg-flex align-items-center mb-4 gap-3">
                    <div class="position-relative">

                  
                  
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>

                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Birthdate</th>
                                    <th>Purok/Street</th>
                                    <th>Status</th>
                                    <th>Barangay</th>
                                    <th>City/Town</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $key => $product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->firstname }}</td>
                                            <td>{{ $product->middlename }}</td>
                                            <td>{{ $product->lastname }}</td>
                                            <td>{{ $product->birthdate }}</td>
                                            <td>{{ $product->street }}</td>
                                            <td>{{ $product->barangay }}</td>
                                            <td>{{ $product->town }}</td>
                                            <td>{{ $product->fname }}</td>
                                            <td>{{ $product->mname }}</td>
                                            <td>{{ $product->mname }}</td>
                
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editProduct{{ $product->id }}"><i
                                                        class="bx bxs-edit"></i>Edit</a>
                                                <input type="hidden" name="DELETE" id="DELETE">
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteProduct{{ $product->id }}"><i
                                                        class="bx bxs-trash"></i>Delete</a>
                                            </td>
                                        </tr>


                                        
                                        <!--Edit Product Modal -->
                                        <div class="modal fade" id="editProduct{{ $product->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">EDIT PRODUCT</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        </button>
                                                        {{ $product->id }}
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card border-top border-0 border-4 border-primary">
                                                            <div class="card-body p-5">

                                                                <form
                                                                    action="{{ route('products.update', $product->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('put')
                                                                 
                                                                    <div class="form-group">
                    
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firstname"
                        placeholder="First Name" value="{{ old('firstname', $product->firstname) }}">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename" class="form-control @error('middlename') is-invalid @enderror" id="middlename"
                        placeholder="Middle Name" value="{{ old('middlename', $product->middlename) }}">
                    @error('middlename')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname"
                        placeholder="Last Name" value="{{ old('lastname', $product->lastname) }}">
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate"
                        placeholder="Birthdate" value="{{ old('birthdate', $product->birthdate) }}">
                    @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="street">Purok/Street</label>
                    <input type="text" name="street" class="form-control @error('street') is-invalid @enderror"
                        id="street" placeholder="Purok/Street" value="{{ old('street', $product->street) }}">
                    @error('street')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="barangay">Barangay</label>
                    <input type="text" name="barangay" class="form-control @error('barangay') is-invalid @enderror" id="barangay"
                        placeholder="Barangay" value="{{ old('barangay', $product->barangay) }}">
                    @error('barangay')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="town">City/Town</label>
                    <input type="text" name="town" class="form-control @error('town') is-invalid @enderror"
                        id="town" placeholder="City/Town" value="{{ old('town', $product->town) }}">
                    @error('town')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="fname">Father's Name</label>
                    <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" id="fname"
                        placeholder="Father's Name" value="{{ old('fname', $product->fname) }}">
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="mname">Mother's Name</label>
                    <input type="text" name="mname" class="form-control @error('mname') is-invalid @enderror" id="mname"
                        placeholder="Mother's Name" value="{{ old('mname', $product->mname) }}">
                    @error('mname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
    
                <button class="btn btn-primary" type="submit">Update</button>
               
            </form>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Edit Product Model -->


                                        <!--Delete Product Modal -->
                                        <div class="modal fade" id="deleteProduct{{ $product->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        </button>
                                                        {{ $product->id }}
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card border-top border-0 border-4 border-danger">
                                                            <div class="card-body p-5">
                                                                <div class="card-title d-flex align-items-center">
                                                                    <div><i
                                                                            class="bx bxs-user me-1 font-22 text-danger"></i>
                                                                    </div>
                                                                    <h5 class="mb-0 text-danger">Delete User</h5>
                                                                </div>
                                                                <hr>
                                                                <form
                                                                    action="{{ route('products.destroy', $product->id) }}"
                                                                    method="POST" enctype="multipart/form-data"
                                                                    class="row g-3">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <br>
                                                                    <div class="container">
                                                                        <h6 class="text-center">Are you sure you want to
                                                                            delete <br><br> <span class="text-danger">
                                                                                {{ $product->product_name }}</span>
                                                                        </h6>
                                                                    </div>
                                                                    <hr>
                                                                    <button type="submit" class="btn btn-default px-5"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger px-5">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Delete User Model -->
                                        <div class="row">
                                            <div class="col col-lg-9 mx-auto">
                                                <div class="card">
                                                    <div class="row row-cols-auto g-3">
                                                        <div class="col">

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="description{{ $product->id }}"
                                                                tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Description</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            {{ $product->description }}
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="..." class="py-5 float-right">
                            <ul class="pagination">
                                {{ $products->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
