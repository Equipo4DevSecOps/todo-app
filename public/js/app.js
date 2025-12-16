function loadTasks() {
    fetch('get_tasks.php')
        .then(res => res.json())
        .then(data => {
            let list = document.getElementById('taskList');
            list.innerHTML = '';
            data.forEach(task => {
                let li = document.createElement('li');
                li.textContent = task;
                list.appendChild(li);
            });
        });
}

function addTask() {
    let task = document.getElementById('task').value;

    fetch('add_task.php', {
        method: 'POST',
        body: JSON.stringify({ task })
    }).then(() => {
        document.getElementById('task').value = '';
        loadTasks();
    });
}

loadTasks();
