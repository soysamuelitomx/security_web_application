<div class="modal modal--create">
        <div class="modal__content">
            <header class="modal__header">
                <h2 class="modal__title">New User</h2>
            </header>
            <main class="modal__main">
                <form action="dialog" id="userForm">
                    <div class="modal__fieldset modal__fieldset--basic">
                        <div class="modal__form-group">
                            <label for="full_name" class="modal__label">Full Name</label>
                            <input
                                type="text"
                                id="create--full_name"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="email" class="modal__label">Email</label>
                            <input
                                type="email"
                                id="create--email"
                                class="modal__input"
                                autocomplete="off"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="password" class="modal__label">Password</label>
                            <input
                                type="password"
                                id="create--password"
                                class="modal__input"
                                autocomplete="new-password"
                            />
                        </div>
                    </div>
                    <div class="modal__fieldset modal__fieldset--especific">
                        <div class="modal__form-group">
                            <label for="name" class="modal__label">UserName</label>
                            <input
                                type="text"
                                id="create--name"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="deparment" class="modal__label">Department</label>
                            <select id="create--department" name="role" required class="modal__input">
                                <option value="">Seleccione un rol</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Operations">Operations</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="R&D">R&D</option>
                                <option value="Auditor">Auditor</option>
                                <option value="General Boss">General Boss</option>
                            </select>
                        </div>
                        <div class="modal__form-group">
                            <label for="role" class="modal__label">Role</label>
                            <select id="create--role" name="role" required class="modal__input">
                                <option value="">Seleccione un rol</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Operations">Operations</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="R&D">R&D</option>
                                <option value="Auditor">Auditor</option>
                                <option value="General Boss">General Boss</option>
                            </select>
                        </div>
                    </div>
                </form>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                    Close
                </button>
                <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="store()">
                    Add
                </button>
            </footer>
        </div>
    </div>

    <div class="modal modal--update">
        <div class="modal__content">
            <header class="modal__header">
                <h2 class="modal__title">Update User</h2>
            </header>
            <main class="modal__main">
                <form action="dialog" id="userForm">
                    <div class="modal__fieldset modal__fieldset--basic">
                        <div class="modal__form-group">
                            <label for="full_name" class="modal__label">Full Name</label>
                            <input
                                type="text"
                                id="update--full_name"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="email" class="modal__label">Email</label>
                            <input
                                type="email"
                                id="update--email"
                                class="modal__input"
                                autocomplete="off"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="password" class="modal__label">Password</label>
                            <input
                                type="password"
                                id="update--password"
                                class="modal__input"
                                autocomplete="new-password"
                            />
                        </div>
                    </div>
                    <div class="modal__fieldset modal__fieldset--especific">
                        <div class="modal__form-group">
                            <label for="name" class="modal__label">UserName</label>
                            <input
                                type="text"
                                id="update--name"
                                class="modal__input"
                            />
                        </div>
                        <div class="modal__form-group">
                            <label for="deparment" class="modal__label">Department</label>
                            <select id="update--department" name="role" required class="modal__input">
                                <option value="">Seleccione un rol</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Operations">Operations</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="R&D">R&D</option>
                                <option value="Auditor">Auditor</option>
                                <option value="General Boss">General Boss</option>
                            </select>
                        </div>
                        <div class="modal__form-group">
                            <label for="role" class="modal__label">Role</label>
                            <select id="update--role" name="role" required class="modal__input">
                                <option value="">Seleccione un rol</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Operations">Operations</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="R&D">R&D</option>
                                <option value="Auditor">Auditor</option>
                                <option value="General Boss">General Boss</option>
                            </select>
                        </div>
                        <div class="modal__form-group">
                            <label for="update--account_status" class="modal__label">Account_status</label>
                            <select id="update--account_status" name="role" required class="modal__input">
                                <option value="" disabled>Seleccione un rol</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </form>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                    Close
                </button>
                <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="update()">
                    Update
                </button>
            </footer>
        </div>
    </div>

    <div class="modal modal--destroy">
        <div class="modal__content">
            <header class="modal__header">
                <h2 class="modal__title" id="destroyUser"></h2>
            </header>
            <main class="modal__main">
                <form action="dialog" id="userForm">
                    <div class="modal__fieldset modal__fieldset--basic">
                        <p modal__warning>This action will permanently delete the user. Do you want to continue?</p>
                    </div>
                </form>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                    Close
                </button>
                <button type="submit" id="sendButton" class="modal__button modal__button--destroy" onclick="destroy()">
                    Destroy
                </button>
            </footer>
        </div>
    </div>

<div class="container user--container">
    <button class="button button--addUser" onclick="openModalToCreate()">Add user</button>
    <table class="table">
        <thead class="table__thead">
            <tr class="table__row table__row--thead">
                <th class="table__cell table__cell--thead">ID</th>
                <th class="table__cell table__cell--thead">Full Name</th>
                <th class="table__cell table__cell--thead">Username</th>
                <th class="table__cell table__cell--thead">Email</th>
                <th class="table__cell table__cell--thead">Department</th>
                <th class="table__cell table__cell--thead">Role</th>
                <th class="table__cell table__cell--thead">Last Login</th>
                <th class="table__cell table__cell--thead">Account Status</th>
                <th class="table__cell table__cell--thead">Update</th>
            </tr>
        </thead>
        <tbody class="table__tbody" id="user-table-body"></tbody>
    </table>
</div>

<script>

    const modalCreate = document.querySelector(".modal--create");
    const modalUpdate = document.querySelector(".modal--update");
    const modalDestroy = document.querySelector(".modal--destroy");
    const closeModalButton = document.querySelector(".modal__button--close");

    var all_users = @json($all_users);

    const users = all_users.map(user => {
        return {
            id: user.id,
            name: user.name,
            full_name: user.full_name,
            department: user.department,
            last_login: user.last_login,
            account_status: user.account_status,
            email: user.email,
            role: user.role,
        };
    });

    const tableBody = document.getElementById('user-table-body');

    all_users.forEach(user => {
        const row = document.createElement('tr');
        row.className = 'table__row table__row--tbody';

        row.innerHTML = `
            <td class="table__cell table__cell--tbody">${user.id}</td>
            <td class="table__cell table__cell--tbody">${user.full_name}</td>
            <td class="table__cell table__cell--tbody">${user.name}</td>
            <td class="table__cell table__cell--tbody">${user.email}</td>
            <td class="table__cell table__cell--tbody">${user.department}</td>
            <td class="table__cell table__cell--tbody">${Array.isArray(user.role) ? user.role.join(', ') : user.role}</td>
            <td class="table__cell table__cell--tbody">${user.last_login}</td>
            <td class="table__cell table__cell--tbody">${user.account_status ? 'Active' : 'Inactive'}</td>
            <td class="table__cell table__cell--tbody">
                <a href="#" data-id="${user.id}" title="Editar" onclick="edit(${user.id})">
                    <i class="table__icon bi bi-pencil"></i>
                </a>
                <a href="#" data-id="${user.id}" title="Eliminar" onclick="assess(${user.id})">
                    <i class="table__icon bi bi-trash"></i>
                </a>
            </td>
        `;

        tableBody.appendChild(row);

    });

    var userData = {
        id: null,
        name: null,
        full_name: null,
        department: null,
        account_status: null,
        email: null,
        password: null,
        role: null
    };



    function store() {

        userData = {
            id: null,
            name: document.getElementById('create--name').value,
            full_name: document.getElementById('create--full_name').value,
            department: document.getElementById('create--department').value,
            account_status: true,
            email: document.getElementById('create--email').value,
            password: document.getElementById('create--password').value,
            role: document.getElementById('create--role').value
        };
        
        Livewire.emit('store', userData);
        setTimeout(function() {
            location.reload();
        }, 500);

    }

    function edit(userId) {

        const userSelected = users.find(u => u.id == userId);
    
        if (userSelected) {

            // Ahora asigna esos valores al DOM
            document.getElementById('update--name').value = userSelected.name;
            document.getElementById('update--full_name').value = userSelected.full_name;
            document.getElementById('update--department').value = userSelected.department;
            document.getElementById('update--account_status').value = userSelected.account_status;
            document.getElementById('update--email').value = userSelected.email;
            document.getElementById('update--password').value = userSelected.password;
            document.getElementById('update--role').value = userSelected.role;

            userData.id = userSelected.id;
            
            openModalToUpdate();

        } else {
            console.error('Usuario no encontrado');
        }

    }



    function update() {

        userData.name = document.getElementById('update--name').value;
        userData.full_name = document.getElementById('update--full_name').value;
        userData.department = document.getElementById('update--department').value;
        userData.account_status = document.getElementById('update--account_status').value === 'Active';
        userData.email = document.getElementById('update--email').value;
        userData.password = document.getElementById('update--password').value;
        userData.role = document.getElementById('update--role').value;

        Livewire.emit('update', userData);
        setTimeout(function() {
            location.reload();
        }, 500);

    }

    function assess(userId) {

        const user = users.find(u => u.id == userId);
        userData.id = user.id;
        userData.name = user.name;
        document.getElementById('destroyUser').textContent = `Warning: Delete ${userData.name}`;

        if (user) {
            user_id = user.id;
            openModalToDestroy(); // Abre un modal específico para la confirmación de eliminación
        } else {
            console.error('Usuario no encontrado');
        }
    }

    function destroy() {

        
        Livewire.emit('destroy', userData.id);
        setTimeout(function() {
            location.reload();
        }, 500);
    }

    function openModalToCreate() {
        
        modalCreate.classList.add("modal--visible");

    }

    function openModalToUpdate() {
        modalUpdate.classList.add("modal--visible");
    }

    function openModalToDestroy() {
        modalDestroy.classList.add("modal--visible");
    }

    function closeModal() {
        modalCreate.classList.remove("modal--visible"); 
        modalUpdate.classList.remove("modal--visible");
        modalDestroy.classList.remove("modal--visible");

        userData = {};
    }

</script>