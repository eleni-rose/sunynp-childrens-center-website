const validation = new JustValidate("#signup");

validation
    .addField("#f_name", [
        {
            rule: "required"
        }
    ]);