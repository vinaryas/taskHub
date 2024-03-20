<!DOCTYPE html>
<head>
    <div>
        <title>"TASK"</title>
    </div>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Task</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="task">Task</label>
                                <input type="text" name="task" id="task" class="form-control" value="{{ $task->task }}">
                                @error('task')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deadline">Deadline</label>
                                <input type="date" name="deadline" id="deadline" class="form-control" value="{{ $task->deadline }}">
                                @error('deadline')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update Task</button>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<html>
