<div class="modal">
        <div class="modal__content">
            <header class="modal__header">
                <h2 class="modal__title">Problem reported</h2>
            </header>
            <main class="modal__main">
                <form action="dialog" id="userForm">
                    <div class="modal__fieldset modal__fieldset--basic">
                        <div class="modal__form-group">
                            <label for="title" class="modal__label">Title</label>
                            <input
                                type="text"
                                disabled
                                id="title"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="start" class="modal__label">Start</label>
                            <input
                                type="datetime"
                                disabled
                                id="start"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="problematic" class="modal__label">Problematic</label>
                            <input
                                type="text"
                                disabled
                                id="problematic"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="is_resolved" class="modal__label">Resolved</label>
                            <input
                                type="text"
                                disabled
                                id="is_resolved"
                                class="modal__input"
                            />
                        </div>
                    </div>
                    <div class="modal__fieldset modal__fieldset--especific">
                        <div class="modal__form-group">
                            <label for="description" class="modal__label">Description</label>
                            <textarea
                                type="text"
                                disabled
                                id="description"
                                class="modal__input modal__input--textarea"
                            ></textarea>
                        </div>
                        <div class="modal__form-group">
                            <label for="user" class="modal__label">User</label>
                            <input
                                type="text"
                                disabled
                                id="user"
                                class="modal__input"
                            />
                        </div>
                    </div>
                </form>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                    Close
                </button>
                <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="updateProblematic()">
                    Resolved
                </button>
            </footer>
        </div>
    </div>
<div class="container calendar--container">
    <div id="calendar" wire:ignore></div>
</div>

<script>

    const closeModalButton = document.querySelector(".modal__button--close");
    const modal = document.querySelector(".modal");
    
    var id = null;


    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var all_events = @json($all_events);

        const events = all_events.map(event => {
            return {
                id: event.id,
                title: event.title,
                start: event.start,
                end: event.end,
                extendedProps: {
                    description: event.description,
                    problematic_name: event.problematic_name,
                    is_resolved: event.is_resolved,
                    user_name: event.user_name,
                },
            };
        });

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: events,

            eventDidMount: function(info) {
                
                if (info.event.extendedProps.is_resolved) {
                    info.el.style.backgroundColor = '#28a745'; 
                    info.el.style.borderColor = '#28a745'; 
                } else {
                    info.el.style.backgroundColor = '#dc3545'; 
                    info.el.style.borderColor = '#dc3545'; 
                }

                info.el.style.color = '#ffffff'; 

                
                info.el.innerHTML = `<div style="padding: .3em;">${info.event.title}</div>`;
            },

            eventClick: function(info) {
                let selectedEvent = {
                    id: info.event.id,
                    title: info.event.title,
                    start: info.event.start,
                    end: info.event.end,
                    description: info.event.extendedProps.description,
                    problematic_name: info.event.extendedProps.problematic_name,
                    is_resolved: info.event.extendedProps.is_resolved,
                    user_name: info.event.extendedProps.user_name,
                };

                id = info.event.id;

                openModal(selectedEvent);

            },

        });

        calendar.render();

    });

    function openModal(selectedEvent) {
        
        document.getElementById("title").value = selectedEvent.title;
        document.getElementById("start").value = selectedEvent.start.toISOString().split("T")[0];
        document.getElementById("problematic").value = selectedEvent.problematic_name;
        document.getElementById("description").value = selectedEvent.description;
        document.getElementById("is_resolved").value = selectedEvent.is_resolved === 1 ? 'Resolved' : 'Not Resolved';
        document.getElementById("user").value = selectedEvent.user_name;
        modal.classList.add("modal--visible");

    }

    function updateProblematic() {
        Livewire.emit('updateProblematic', id, true); 
        setTimeout(function() {
            location.reload();
        }, 1000);
    }

    function closeModal() {
        modal.classList.remove("modal--visible");
        id = null;
    }

</script>