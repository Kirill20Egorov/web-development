USE
    university;
SELECT
	full_name,
    age,
    g.name 
FROM
    student s
JOIN
    `group` g ON s.group_id = g.group_id
JOIN
    faculty f ON g.faculty_id = f.faculty_id
WHERE
    f.name = 'ФИиВТ'