USE
    university;
SELECT
	full_name,
    age,
    name_group
FROM
    students
JOIN
    groups_students ON students.student_group_id = groups_students.id
JOIN
    facultys ON groups_students.faculty_id = facultys.id
WHERE
    faculty = 'ФИиВТ'