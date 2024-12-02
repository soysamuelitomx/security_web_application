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
                        <span class="modal__span">
                            <p id="create--error--full_name" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="email" class="modal__label">Email</label>
                        <input
                            type="email"
                            id="create--email"
                            class="modal__input"
                            autocomplete="off"
                        />
                        <span class="modal__span">
                            <p id="create--error--email" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="password" class="modal__label">Password</label>
                        <input
                            type="password"
                            id="create--password"
                            class="modal__input"
                            autocomplete="new-password"
                        />
                        <span class="modal__span">
                            <p id="create--error--password" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="create--error--name" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="create--error--department" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="create--error--role" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="update--error--full_name" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="email" class="modal__label">Email</label>
                        <input
                            type="email"
                            id="update--email"
                            class="modal__input"
                            autocomplete="off"
                        />
                        <span class="modal__span">
                            <p id="update--error--email" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="update--error--name" class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="update--error--department"class="modal__span-p"></p>
                        </span>
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
                        <span class="modal__span">
                            <p id="update--error--role" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="account_status" class="modal__label">Account_status</label>
                        <select id="update--account_status" name="" required class="modal__input">
                            <option value="">Seleccione un rol</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        <span class="modal__span">
                            <p id="update--error--account_status" class="modal__span-p"></p>
                        </span>
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
                    <p class="modal__warning">This action will permanently delete the user. Do you want to continue?</p>
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

    let all_users = @json($all_users);

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
            <td class="table__cell table__cell--tbody">
                ${user.last_login ? user.last_login : 'Not logged in yet'}
            </td>
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

        const { fullName, email, password, name, department, role } = getCreateInputValues();


        let hasError = false;

        clearErrors();

        
        if (!fullName) {
            displayError('create--error--full_name', 'Full Name is required', 'create--full_name');
            hasError = true;
        }
        if (!email) {
            displayError('create--error--email', 'Email is required', 'create--email');
            hasError = true;
        }
        if (!password) {
            displayError('create--error--password', 'Password is required', 'create--password');
            hasError = true;
        }
        if (!name) {
            displayError('create--error--name', 'Username is required', 'create--name');
            hasError = true;
        }
        if (!department) {
            displayError('create--error--department', 'Department is required', 'create--department');
            hasError = true;
        }
        if (!role) {
            displayError('create--error--role', 'Role is required', 'create--role');
            hasError = true;
        }

        if (hasError) return;

        const userData = {
            id: null,
            name: name,
            full_name: fullName,
            department: department,
            account_status: true,
            email: email,
            password: document.getElementById('create--password').value,
            role: role
        };

        clearErrors();
        Livewire.emit('store', userData);

        setTimeout(function() {
            location.reload();
        }, 500);

    }

    function getCreateInputValues() {
        const fullName = document.getElementById('create--full_name').value;
        const email = document.getElementById('create--email').value;
        const password = document.getElementById('create--password').value;
        const name = document.getElementById('create--name').value;
        const department = document.getElementById('create--department').value;
        const role = document.getElementById('create--role').value;

        return {
            fullName,
            email,
            password,
            name,
            department,
            role
        };
    }

    function getUpdateInputValues() {

        const name = document.getElementById('update--name').value;
        const fullName = document.getElementById('update--full_name').value;
        const department = document.getElementById('update--department').value;
        const account_status = document.getElementById('update--account_status').value;
        const email = document.getElementById('update--email').value;
        const password = document.getElementById('update--password').value;
        const role = document.getElementById('update--role').value;

        return { name, fullName, department, account_status, email, password, role };

    }

    function displayError(spanId, message, inputId) {
        document.getElementById(spanId).textContent = message;
        const input = document.getElementById(inputId);
        input.style.backgroundColor = '#f6c7b7';
        input.style.outline = '2px solid #911';
        setTimeout(() => {
            input.style.backgroundColor = '';
            input.style.outline = '';
        }, 1000);
    }


    function edit(userId) {

        const userSelected = users.find(u => u.id == userId);
    
        if (userSelected) {

            
            document.getElementById('update--name').value = userSelected.name;
            document.getElementById('update--full_name').value = userSelected.full_name;
            document.getElementById('update--department').value = userSelected.department;
            document.getElementById('update--account_status').value = userSelected.account_status ? 'Active' : 'Inactive';
            document.getElementById('update--email').value = userSelected.email;
            document.getElementById('update--role').value = userSelected.role;

            userData.id = userSelected.id;
            
            openModalToUpdate();

        } else {
            console.error('Usuario no encontrado');
        }

    }



    function update() {

        const { name, fullName, department, account_status, email, password, role } = getUpdateInputValues();


        let hasError = false;

        clearErrors();

        
        if (!name) {
            displayError('update--error--name', 'Username is required', 'update--name');
            hasError = true;
        }
        if (!fullName) {
            displayError('update--error--full_name', 'Full Name is required', 'update--full_name');
            hasError = true;
        }
        if (!email) {
            displayError('update--error--email', 'Email is required', 'update--email');
            hasError = true;
        }
        if (!department) {
            displayError('update--error--department', 'Department is required', 'update--department');
            hasError = true;
        }
        if (!account_status) {
            displayError('update--error--account_status', 'Department is required', 'update--account_status');
            hasError = true;
        }
        if (!role) {
            displayError('update--error--role', 'Role is required', 'update--role');
            hasError = true;
        }

        if (hasError) return;

        
        userData.name = name;
        userData.full_name = fullName;
        userData.department = department;
        userData.account_status = account_status === 'Active';
        userData.email = email;
        userData.password = password;
        userData.role = role;

        userData.name = document.getElementById('update--name').value;
        userData.full_name = document.getElementById('update--full_name').value;
        userData.department = document.getElementById('update--department').value;
        userData.account_status = document.getElementById('update--account_status').value === 'Active';
        userData.email = document.getElementById('update--email').value;
        userData.password = document.getElementById('update--password').value;
        userData.role = document.getElementById('update--role').value;

        clearErrors();
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
            openModalToDestroy(); 
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

    function clearErrors() {

        const spans = document.querySelectorAll('.modal__span-p');
        spans.forEach(span => {
            span.textContent = '';
        });

        const inputs = document.querySelectorAll('.modal__input');
        inputs.forEach(input => {
            input.style.backgroundColor = '';
            input.style.border = '';
        });

    }
    
    function clearErrors() {

        const spans = document.querySelectorAll('.modal__span-p');
        spans.forEach(span => {
            span.textContent = '';
        });

        const inputs = document.querySelectorAll('.modal__input');
        inputs.forEach(input => {
            input.style.backgroundColor = '';
            input.style.border = '';
        });

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
        clearErrors();
        document.getElementById('create--name').value = '';
        document.getElementById('create--full_name').value = '';
        document.getElementById('create--department').value = '';
        document.getElementById('create--email').value = '';
        document.getElementById('create--password').value = '';
        document.getElementById('create--role').value = '';
        document.getElementById('update--name').value = '';
        document.getElementById('update--full_name').value = '';
        document.getElementById('update--department').value = '';
        document.getElementById('update--account_status').value = '';
        document.getElementById('update--email').value = '';
        document.getElementById('update--password').value = '';
        document.getElementById('update--role').value = '';

        modalCreate.classList.remove("modal--visible"); 
        modalUpdate.classList.remove("modal--visible");
        modalDestroy.classList.remove("modal--visible");
        userData = {};
    }

</script>