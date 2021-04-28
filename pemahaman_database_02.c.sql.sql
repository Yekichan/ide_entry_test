SELECT school_name, COUNT(inaugurated_date) AS count_inaugurated_date
FROM school
GROUP BY inaugurated_datechool (id, school_code, school_name, inaugurated_date) VALUES (5, 'SCHO05', 'SCHOOL MNO', '2020-01-25');