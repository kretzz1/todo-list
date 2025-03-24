document.addEventListener('DOMContentLoaded', function() {
    const filterPending = document.getElementById('filter-pending');
    const filterCompleted = document.getElementById('filter-completed');
    const taskCheckboxes = document.querySelectorAll('.task-checkbox');

    filterPending.addEventListener('change', filterTasks);
    filterCompleted.addEventListener('change', filterTasks);

    taskCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const taskId = this.dataset.id;
            const status = this.checked ? 1 : 0;
            fetch('mark_task.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${taskId}&status=${status}`
            }).then(response => {
                window.location.reload();
            });
        });
    });

    function filterTasks() {
        const showPending = filterPending.checked;
        const showCompleted = filterCompleted.checked;
        const tasks = document.querySelectorAll('li');

        tasks.forEach(task => {
            const isCompleted = task.classList.contains('completed');
            if ((showPending && !isCompleted) || (showCompleted && isCompleted)) {
                task.style.display = 'flex';
            } else {
                task.style.display = 'none';
            }
        });
    }
});