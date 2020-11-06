# Requirements:

- [x] <b>Req001:</b> Accept HIBP JSON files as file upload, store in project inbox.
- [x] <b>Req002:</b> Process JSON files, filter out invalid reports, and store remaining data in SQL database.
- [ ] <b>Req003:</b> When data is stored, indicate that a notification is to be sent.
- [ ] <b>Req004:</b> Service will be set up as a private service run on an organizational server and accessible to computers connected to an organizational network  (It will not be accessible to the public internet).
- [ ] <b>Req005:</b> The service will include a web portal to allow administrators and organization members to view data in the service's database.
- [ ] <b>Req006:</b> The service will allow users to log in with organizational email accounts via Active Directory, or with alternate accounts.  (Needs verification from Allen on whether alternate accounts are allowed)
- [ ] <b>Req007:</b> A logged in user will be shown a list of all breaches related to their email which they have not yet acknowledged, and will have the ability to acknowledge these breaches (indicating that they are aware of the breach and have taken appropriate action to ensure their information is safe).
- [ ] <b>Req008:</b> A logged in user will be able to view a list of all breaches they have been involved in.
- [ ] <b>Req009:</b> A logged in administrator will be shown a mixed dashboard, showing Total number of breaches, leaked emails, sent notifications, and notifications responded to by day, week, and month.  notifications responded to will be represented as a number and as a percentage of sent notifications.
- [ ] <b>Req010:</b> The admin dashboard will also display an abbrieviated log of sent notifications, displaying 10-15 records.  It will display the most recent records first, and will be filterable by user, email, leak, or date.
- [ ] <b>Req011:</b> The admin will be able to view a list of all sent notifications.  This is the full version of the list shown on the dashboard.  It will be filterable by user, email, breach, or date.
- [ ] <b>Req012:</b> The admin will be able to access a file interface.  It will allow file uploads to the service (to be processed and stored as listed in Req001, Req002, and Req003) and will show a list of all uploaded files (stored in Req003). The file page will allow downloading or viewing of previously uploaded files. (This needs some clarification from Allen on which he wants, or if he wants both.)
- [ ] <b>Req013:</b> The admin will be able to access a data view, where they can peruse records in the database.  The data should be filterable by leaked email, breach name, and date.  We will need more clarification from Allen on what this will look like (e.g. if the admin will have to submit querys to be returned, or if we should display all the data as a list, etc.)

# Stretch Goals:

- [ ] <b>Str001:</b> The service will allow users to set additional notification addresses/login emails.  The service will send email notifications to all email addresses for a user when a new notification is recieved.
- [ ] <b>Str002:</b> The service will run continuously in the background, so email notifications and file processing can be done without the admin having to stay on the page.
- [ ] <b>Str003:</b> Instead of the admin having to download then upload the file, the service will fetch the file automatically using the link submitted by the admin.
