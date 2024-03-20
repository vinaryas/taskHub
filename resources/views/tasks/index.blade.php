<!DOCTYPE html>
<head>
    <div>
        <title>"TASK"</title>
    </div>
</head>
<body>
    <div>
        <h3>"This is Body section on task"</h3>
        <a href="{{ route('home') }}" class="btn btn-info"> <i class="fas fa-file"> home </i>  </a>
    </div>
    <div>
        <h1>Create New Task</h1>

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf <!-- Token CSRF Laravel -->

            <div>
                <label for="task">Task:</label>
                <input type="text" id="task" name="task" required>
            </div>

            <div>
                <label for="deadline">Deadline:</label>
                <input type="date" id="deadline" name="deadline" required>
            </div>

            <div>
                <a href="{{ route('tasks.store') }}" class="btn btn-info btn-sm"> Create <i class="fas fa-angle-right"></i>
                </a>
            </div>

            <button type="submit">Create Task</button>
        </form>

    </div>
    <div>
        <table class="table table-bordered table-striped" id="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Deadline</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->task }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td><a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-info btn-sm"> Update <i class="fas fa-angle-right"></i>
                        </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
