USE
    university;
SELECT
	full_name,
    age
FROM
    student s
JOIN
    `group` g ON s.group_id = g.group_id
WHERE
    name = 'ПС'