# Armored Project Guidelines

## Product

Armored is an interactive database and search engine for historical and modern
armored vehicles. Build it as a reliable research tool for people interested in
military history and military technology.

The vehicle is the central domain object. The application must support vehicle
detail pages and lists grouped or filtered by operator country, country of
origin, service period, production period, production quantity, and technical
specifications. Introduce further aspects incrementally without weakening this
vehicle-centered model.

## Working Context

- Read `plans/project-plan.md` before planning substantial work.
- Keep `plans/project-plan.md` current when scope, priorities, or architectural
  decisions change.
- Maintain `notes.txt` as a reusable Docker and Symfony CLI cheat sheet. Add
  commands that are useful for future development or operations, not a log of
  commands that happened to be executed.
- The `plans/` directory and `notes.txt` are local working materials and must
  remain excluded from version control.

## Technology

- Use Symfony and modern, strictly typed PHP for the application.
- Run all application services and development commands with Docker. Do not
  require host-installed PHP, Composer, Symfony CLI, or MySQL.
- Use MySQL as the initial relational database.
- Prefer Symfony conventions and maintained Symfony components over custom
  infrastructure.

## Engineering Standards

- Design domain concepts explicitly and keep business rules independent from
  delivery and persistence concerns.
- Treat historical claims and technical specifications as sourced data. Preserve
  provenance and make uncertainty or conflicting sources representable.
- Use migrations for every database schema change.
- Validate external input at system boundaries and report failures explicitly.
- Add automated tests for new behavior and regressions.
- Keep changes focused, readable, and documented where a decision would not be
  obvious to another maintainer.

## Validation

- Run the smallest relevant test and quality checks after each change.
- Before considering a feature complete, verify it through its real entry point
  and confirm that database migrations work from a clean state.
