@extands('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <div>
                <h2 class="fw-bold mb-2">Notes</h2>
                <p class="text-muted mb-0">Manage all your notes in one place</p>
            </div>
            <a href="" class="btn btn-info">
                Create new Note
            </a>
        </div>

        <table class="table table-striped table-hover table-bordered border border-info-subtle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Id</th>
                    <td>First Title</td>
                    <td>First Content</td>
                    <td class="d-flex">
                        <a href="" class="btn btn-primary me-2">Show</a>
                        <a href="" class="btn btn-warning me-2">Edit</a>
                        <a href="" class="btn btn-danger me-2">Delete</a>
                    </td>
                </tr>
            </tbody>

        </table>
    </div>

</div>