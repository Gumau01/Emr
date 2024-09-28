@extends('layouts.admin.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h2>
            Users
           
        </h2>

        <a href="#" class="btn btn-info btn-sm">
            <i class="fa fa-eye"></i> Add User
        </a>
        
        
    </section>

    <section class="content">
        <div class="box">
           
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample static rows -->
                        <tr>
                            <td>1</td> <!-- Row number -->
                            <td>John Doe</td> <!-- Name -->
                            <td>johndoe@example.com</td> <!-- Email -->
                            <td>Admin</td> <!-- Department -->
                            <td>
                                <!-- View Button -->
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> View
                                </a>
                
                                <!-- Edit Button -->
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                
                                <!-- Delete Button (with confirmation) -->
                                <form action="#" method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                
                        <!-- Repeat more rows as necessary -->
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>Reception</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> View
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Repeat more rows as necessary -->
                        <tr>
                            <td>3</td>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>Account</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> View
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Repeat more rows as necessary -->
                        <tr>
                            <td>4</td>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>Labrotory</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> View
                                </a>
                                <a href="#" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </section>
</div>
@endsection