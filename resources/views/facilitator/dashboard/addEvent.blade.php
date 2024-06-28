<!-- Button trigger modal -->

<button type="button" class="btn btn-primary btn btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#addEvent">
  <li class="fa fa-plus"></li>
</button>

<!-- Modal -->
<div class="modal fade" id="addEvent" tabindex="-1" aria-labelledby="addEventLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventLabel">Add a new event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{ route('event.create') }}" id="eventSubmit">
                @csrf
                @method('post')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title here"
                            name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="Location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="Location" placeholder="Enter location here"
                            name="location" required>
                    </div>

                    <div class="mb-3">
                        <label for="preliminaryDate" class="form-label">Date (Preliminary)</label>
                        <input type="date" class="form-control" id="preliminaryDate" name="preliminaryDate" required>
                    </div>

                    <div class="mb-3">
                        <label for="preliminaryStartTime" class="form-label">Start time (Preliminary)</label>
                        <input type="time" class="form-control" id="preliminaryStartTime" name="preliminaryStartTime"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="finalDate" class="form-label">Date (Semi/Final)</label>
                        <input type="date" class="form-control" id="finalDate" name="finalDate" required>
                    </div>

                    <div class="mb-3">
                        <label for="finalStartTime" class="form-label">Start time (Semi/Final)</label>
                        <input type="time" class="form-control" id="finalStartTime" name="finalStartTime" required>
                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn btn-sm" type="submit" id="submitEvent">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        <span id="submit">Submit</span>
                    </button>
                    <button type="button" class="btn btn-secondary btn btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </form>


        </div>
    </div>

</div>
