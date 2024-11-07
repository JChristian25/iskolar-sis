@extends('layouts.app')



@section('content')
    <div class="flex items-center justify-center mt-4">
        <div class="w-[80%] px-4">
            <button id="add_student" class="bg-indigo-500 px-4 py-2 rounded-md text-white">Add new student</button>
        </div>
    </div>

    <div class="flex justify-center items-center p-2">
        <div class="w-[80%] bg-slate-200 shadow-sm p-4 rounded-md">
            <table id="students">
                <thead>
                        <tr>
                            <th class="text-center">Student ID</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Date of Birth</th>
                            <th class="text-center">Enrollment Date</th>
                            <th class="text-center">Email</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{$student->student_id}}</td>
                            <td class="text-center">{{$student->last_name}}</td>
                            <td class="text-center">{{$student->first_name}}</td>
                            <td class="text-center">{{$student->date_of_birth}}</td>
                            <td class="text-center">{{$student->enrollment_date}}</td>
                            <td class="text-center">{{$student->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal structure -->
    <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="studentModalLabel">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('students.store', )}}">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-2">
                                <label for="last_name" class="block text-sm font-medium text-gray-900 mb-2">
                                    Last Name
                                </label>
                                <input name="last_name" id="last_name" type="text" class="w-full px-3 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500
                                focus:border-indigo-500" required>
                            </div>
                            <div class="mb-2">
                                <label for="first_name" class="block text-sm font-medium text-gray-900 mb-2">
                                    First Name
                                </label>
                                <input name="first_name" id="first_name" type="text" class="w-full px-3 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500
                                focus:border-indigo-500" required>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="block text-sm font-medium text-gray-900 mb-2">
                                    Email
                                </label>
                                <input name="email" id="email" type="text" class="w-full px-3 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500
                                focus:border-indigo-500" required>
                            </div>
                            <div class="mb-2">
                                <label for="date_of_birth" class="block text-sm font-medium text-gray-900 mb-2">
                                    Birthdate
                                </label>
                                <input name="date_of_birth" id="date_of_birth" type="date" class="w-full px-3 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500
                                focus:border-indigo-500" required>
                            </div>
                            <div class="mb-2">
                                <label for="enrollment_date" class="block text-sm font-medium text-gray-900 mb-2">
                                    Enrollment Date
                                </label>
                                <input name="enrollment_date" id="enrollment_date" type="date" class="w-full px-3 py-2 border border-gray-300
                                rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500
                                focus:border-indigo-500" required>
                            </div>
                        </div>
                        <input type="submit" value="Submit a new student" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#students").DataTable({
                "info": true,
                "lengthChange": false
            });

            $("#add_student").on('click', function() {
                $('#studentModal').modal('show');
            });
        });
    </script>

@endsection
