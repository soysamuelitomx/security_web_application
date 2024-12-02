<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Event;
use App\Models\Audit;
use App\Models\Protocol;
use App\Models\Standard;
use App\Models\Problematic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Samuel',
            'full_name' => 'Samuel Pinzon',
            'department' => 'IT',
            'email' => 'soysamuelitomx@gmail.com',
            'password' => bcrypt('1234567890'), // Puedes cambiar las contraseñas
            'last_login' => '2024-10-10 09:00',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Alberto',
            'full_name' => 'Alberto López',
            'department' => 'HR',
            'email' => 'alberto@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-11 11:30',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Luis',
            'full_name' => 'Luis Gómez',
            'department' => 'Finance',
            'email' => 'luis@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-10 10:15',
            'account_status' => false, // Inactivo
        ]);
        
        User::create([
            'name' => 'Bertha',
            'full_name' => 'Bertha Ruiz',
            'department' => 'Sales',
            'email' => 'bertha@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-11 09:45',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Angle',
            'full_name' => 'Angle Torres',
            'department' => 'Marketing',
            'email' => 'angel@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-10 08:30',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Victor',
            'full_name' => 'Victor Manuel',
            'department' => 'Operations',
            'email' => 'victor@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-09 02:20',
            'account_status' => false, // Inactivo
        ]);
        
        User::create([
            'name' => 'Carmen',
            'full_name' => 'Carmen Fernández',
            'department' => 'Customer Service',
            'email' => 'carmen@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-11 07:15',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Diego',
            'full_name' => 'Diego Ruiz',
            'department' => 'IT',
            'email' => 'diego@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-10 11:00',
            'account_status' => true, // Activo
        ]);
        
        User::create([
            'name' => 'Laura',
            'full_name' => 'Laura Vega',
            'department' => 'Finance',
            'email' => 'laura@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-11 01:15',
            'account_status' => false, // Inactivo
        ]);
        
        User::create([
            'name' => 'Sofía',
            'full_name' => 'Sofía Morales',
            'department' => 'R&D',
            'email' => 'sofia@example.com',
            'password' => bcrypt('1234567890'),
            'last_login' => '2024-10-12 10:50',
            'account_status' => true, // Activo
        ]);

        $ITMember = Role::create(['name' => 'IT']);
        $financeRole = Role::create(['name' => 'Finance']);
        $hrRole = Role::create(['name' => 'HR']);
        $marketingRole = Role::create(['name' => 'Marketing']);
        $salesRole = Role::create(['name' => 'Sales']);
        $operationsRole = Role::create(['name' => 'Operations']);
        $customerServiceRole = Role::create(['name' => 'Customer Service']);
        $rdRole = Role::create(['name' => 'R&D']);
        $auditorRole = Role::create(['name' => 'Auditor']);
        $generalBossRole = Role::create(['name' => 'General Boss']);
                        
                        // Asignar roles a los usuarios
        $user1 = User::findOrFail(1);
        $user1->syncRoles($ITMember); // Samuel - IT
                        
        $user2 = User::findOrFail(2);
        $user2->syncRoles($hrRole); // Alberto - HR
                        
        $user3 = User::findOrFail(3);
        $user3->syncRoles($financeRole); // Luis - Finance
                        
        $user4 = User::findOrFail(4);
        $user4->syncRoles($marketingRole); // Bertha - Marketing
                        
        $user5 = User::findOrFail(5);
        $user5->syncRoles($salesRole); // Angle - Sales
                        
        $user6 = User::findOrFail(6);
        $user6->syncRoles($operationsRole); // Victor - Operations
                        
        $user7 = User::findOrFail(7);
        $user7->syncRoles($customerServiceRole); // Carmen - Customer Service
                        
        $user8 = User::findOrFail(8);
        $user8->syncRoles($rdRole); // Diego - R&D
        
        $user9 = User::findOrFail(9);
        $user9->syncRoles($auditorRole); // Laura - Auditor
                        
        $user10 = User::findOrFail(10);
        $user10->syncRoles($generalBossRole); // Sofía - General Boss

        // Asignar permisos a roles (no a usuarios)
        $showUsersPermission = Permission::create(['name' => 'Show Usuarios']);
        $createUsersPermission = Permission::create(['name' => 'Create Usuarios']);
        $updateUsersPermission = Permission::create(['name' => 'Update Usuarios']);
        $removeUsersPermission = Permission::create(['name' => 'Remove Usuarios']);

        // Sincronizar permisos con el rol de General Administrator
        $ITMember = Role::findByName('IT');
        $showUsersPermission->assignRole($ITMember);
        $createUsersPermission->assignRole($ITMember);
        $updateUsersPermission->assignRole($ITMember);
        $removeUsersPermission->assignRole($ITMember);



        $problematics = [
            [
                'name' => 'Conciencia y Capacitación en Seguridad Informática',
                'description' => 'Problemas relacionados con la falta de capacitación y conciencia en seguridad informática entre los empleados.'
            ],
            [
                'name' => 'Autenticación y Acceso',
                'description' => 'Problemas relacionados con el manejo de contraseñas, autenticación y control de acceso a sistemas.'
            ],
            [
                'name' => 'Protección de Datos y Privacidad',
                'description' => 'Problemas relacionados con la protección de datos personales y confidenciales en la organización.'
            ],
            [
                'name' => 'Gestión de Dispositivos y Endpoints',
                'description' => 'Problemas relacionados con la seguridad de dispositivos personales y corporativos utilizados por los empleados.'
            ],
            [
                'name' => 'Amenazas Internas',
                'description' => 'Problemas relacionados con el riesgo de amenazas internas por parte de empleados malintencionados o negligentes.'
            ],
            [
                'name' => 'Gestión de Incidentes de Seguridad',
                'description' => 'Problemas relacionados con la gestión y respuesta ante incidentes de seguridad informática.'
            ],
            [
                'name' => 'Uso de Red y Conectividad Segura',
                'description' => 'Problemas relacionados con la seguridad de las conexiones de red utilizadas por los empleados.'
            ],
            [
                'name' => 'Cumplimiento Normativo y Auditoría',
                'description' => 'Problemas relacionados con el cumplimiento de normativas de seguridad informática y auditorías.'
            ],
            [
                'name' => 'Seguridad de Correo Electrónico y Comunicaciones',
                'description' => 'Problemas relacionados con la seguridad de las comunicaciones y el uso de correo electrónico seguro.'
            ],
            [
                'name' => 'Evaluación y Gestión de Riesgos',
                'description' => 'Problemas relacionados con la evaluación y gestión de riesgos en la organización.'
            ],
        ];

        Audit::create([
            'audit_name' => 'Revisión de políticas de acceso',
            'audit_type' => 'Políticas de seguridad',
            'auditor' => 'Juan Pérez',
            'status' => 'completada',
        ]);

        Audit::create([
            'audit_name' => 'Evaluación de seguridad de red',
            'audit_type' => 'Seguridad de red',
            'auditor' => 'María López',
            'status' => 'en proceso',
        ]);

        Audit::create([
            'audit_name' => 'Auditoría de permisos internos',
            'audit_type' => 'Control de acceso',
            'auditor' => 'Carlos Martínez',
            'status' => 'pendiente',
        ]);

        Audit::create([
            'audit_name' => 'Revisión de políticas BYOD',
            'audit_type' => 'Dispositivos personales',
            'auditor' => 'Ana Gómez',
            'status' => 'completada',
        ]);

        Audit::create([
            'audit_name' => 'Verificación de firewalls',
            'audit_type' => 'Infraestructura',
            'auditor' => 'Pedro Ramírez',
            'status' => 'en proceso',
        ]);

        Audit::create([
            'audit_name' => 'Inspección de vulnerabilidades',
            'audit_type' => 'Vulnerabilidades',
            'auditor' => 'Sofía Hernández',
            'status' => 'completada',
        ]);

        Audit::create([
            'audit_name' => 'Auditoría de contraseñas',
            'audit_type' => 'Seguridad de contraseñas',
            'auditor' => 'Luis Torres',
            'status' => 'pendiente',
        ]);

        Audit::create([
            'audit_name' => 'Evaluación de aplicaciones web',
            'audit_type' => 'Aplicaciones web',
            'auditor' => 'Elena Sánchez',
            'status' => 'completada',
        ]);

        Audit::create([
            'audit_name' => 'Inspección de bases de datos',
            'audit_type' => 'Bases de datos',
            'auditor' => 'Fernando Ortega',
            'status' => 'en proceso',
        ]);

        // Insertar 9 registros en la tabla 'protocols'
        Protocol::create([
            'title' => 'Protección contra ataques DDoS',
            'description' => 'Procedimiento para mitigar ataques de denegación de servicio distribuido.',
            'use_case' => 'Ataque DDoS',
            'procedure' => '1. Monitorear tráfico, 2. Implementar firewall, 3. Realizar pruebas de estrés.',
            'severity_level' => 'High',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Manejo de incidentes de seguridad',
            'description' => 'Instrucciones para la gestión de incidentes de seguridad cibernética.',
            'use_case' => 'Incidente de seguridad',
            'procedure' => '1. Identificar el incidente, 2. Aislar el incidente, 3. Reportar al equipo de seguridad.',
            'severity_level' => 'Medium',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Respuesta ante intrusión',
            'description' => 'Guía para actuar en caso de intrusión no autorizada en sistemas.',
            'use_case' => 'Intrusión no autorizada',
            'procedure' => '1. Desconectar la máquina afectada, 2. Analizar los logs, 3. Notificar a los administradores.',
            'severity_level' => 'High',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Cifrado de datos sensibles',
            'description' => 'Normas para el cifrado de datos sensibles en reposo y tránsito.',
            'use_case' => 'Protección de datos sensibles',
            'procedure' => '1. Usar TLS para tránsito, 2. Cifrar bases de datos con AES-256.',
            'severity_level' => 'High',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Autenticación multifactor',
            'description' => 'Instrucciones para implementar autenticación multifactor (MFA).',
            'use_case' => 'Acceso a sistemas críticos',
            'procedure' => '1. Configurar MFA en todos los sistemas, 2. Habilitar aplicaciones de autenticación.',
            'severity_level' => 'Medium',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Gestión de contraseñas seguras',
            'description' => 'Normas para la creación de contraseñas seguras.',
            'use_case' => 'Acceso a sistemas internos',
            'procedure' => '1. Usar contraseñas de al menos 12 caracteres, 2. Evitar palabras comunes.',
            'severity_level' => 'High',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Monitoreo de red',
            'description' => 'Instrucciones para monitorear el tráfico de red en busca de anomalías.',
            'use_case' => 'Análisis de red',
            'procedure' => '1. Implementar sistemas de monitoreo, 2. Analizar patrones de tráfico sospechosos.',
            'severity_level' => 'Medium',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Protección contra malware',
            'description' => 'Procedimiento para detectar y mitigar malware en la red corporativa.',
            'use_case' => 'Ataques de malware',
            'procedure' => '1. Realizar escaneos periódicos, 2. Actualizar las bases de datos de antivirus.',
            'severity_level' => 'High',
            'active' => true,
        ]);
        Protocol::create([
            'title' => 'Respaldo de datos',
            'description' => 'Normas para realizar respaldos periódicos de datos críticos.',
            'use_case' => 'Protección de datos',
            'procedure' => '1. Realizar respaldos diarios, 2. Verificar la integridad de los respaldos.',
            'severity_level' => 'Medium',
            'active' => true,
        ]);

        // Insertar 9 registros en la tabla 'standards'
Standard::create([
    'name' => 'Cumplimiento de políticas de seguridad',
    'description' => 'Norma que requiere que todos los empleados sigan las políticas de seguridad de la organización.',
    'active' => true,
]);
Standard::create([
    'name' => 'Control de acceso',
    'description' => 'Establecer controles de acceso para asegurar que solo el personal autorizado tenga acceso a sistemas críticos.',
    'active' => true,
]);
Standard::create([
    'name' => 'Gestión de contraseñas',
    'description' => 'Establecer directrices para la creación, almacenamiento y cambio de contraseñas seguras.',
    'active' => true,
]);
Standard::create([
    'name' => 'Actualización de software y parches',
    'description' => 'Reglas para mantener todos los sistemas actualizados con los últimos parches de seguridad.',
    'active' => true,
]);
Standard::create([
    'name' => 'Seguridad en la red',
    'description' => 'Norma para asegurar que las redes estén protegidas contra accesos no autorizados.',
    'active' => true,
]);
Standard::create([
    'name' => 'Autenticación multifactor',
    'description' => 'Norma que requiere el uso de autenticación multifactor para sistemas críticos.',
    'active' => true,
]);
Standard::create([
    'name' => 'Cifrado de datos sensibles',
    'description' => 'Norma que exige el cifrado de datos sensibles tanto en tránsito como en reposo.',
    'active' => true,
]);
Standard::create([
    'name' => 'Gestión de riesgos',
    'description' => 'Establecer procesos para identificar, evaluar y mitigar riesgos en la organización.',
    'active' => true,
]);
Standard::create([
    'name' => 'Monitoreo de seguridad',
    'description' => 'Norma para implementar monitoreo de seguridad para detectar actividades sospechosas.',
    'active' => true,
]);
Standard::create([
    'name' => 'Respaldo de datos',
    'description' => 'Requiere realizar respaldos periódicos de datos críticos.',
    'active' => true,
]);

        

        foreach($problematics as $problematic)
        {

            Problematic::create($problematic);

        }

        $events = [
            [
                'title' => 'Evento #1',
                'start' => '2024-10-1 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 1",
                'is_resolved' => false,
                'user_id' => 1,
                'problematic_id' => 1
            ],
            [
                'title' => 'Evento #2',
                'start' => '2024-10-2 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 2",
                'is_resolved' => true,
                'user_id' => 2,
                'problematic_id' => 2
            ],
            [
                'title' => 'Evento #3',
                'start' => '2024-10-3 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 3",
                'is_resolved' => false,
                'user_id' => 3,
                'problematic_id' => 3
            ],
            [
                'title' => 'Evento #4',
                'start' => '2024-10-4 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 4",
                'is_resolved' => true,
                'user_id' => 1,
                'problematic_id' => 4
            ],
            [
                'title' => 'Evento #5',
                'start' => '2024-10-5 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 5",
                'is_resolved' => false,
                'user_id' => 2,
                'problematic_id' => 5
            ],
            [
                'title' => 'Evento #6',
                'start' => '2024-10-6 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 6",
                'is_resolved' => true,
                'user_id' => 3,
                'problematic_id' => 6
            ],
            [
                'title' => 'Evento #7',
                'start' => '2024-10-7 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 7",
                'is_resolved' => false,
                'user_id' => 1,
                'problematic_id' => 7
            ],
            [
                'title' => 'Evento #8',
                'start' => '2024-10-8 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 8",
                'is_resolved' => true,
                'user_id' => 2,
                'problematic_id' => 8
            ],
            [
                'title' => 'Evento #9',
                'start' => '2024-10-9 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 9",
                'is_resolved' => false,
                'user_id' => 3,
                'problematic_id' => 9
            ],
            [
                'title' => 'Evento #10',
                'start' => '2024-10-10 8:00',
                'end' => null,
                'description' => "Descripcion Del Evento 10",
                'is_resolved' => true,
                'user_id' => 1,
                'problematic_id' => 10
            ],
        ];
        

        foreach($events as $event)
        {

            Event::create($event);

        }

    }
}
