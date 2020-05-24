USE
    university;
SELECT
	full_name,
    age
FROM
    students
JOIN
    groups_student ON students.student_group_id = groups_student.id
WHERE
    name_group = 'ПС'