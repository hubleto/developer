# Lesson 3: Custom App Development - backend basics

<i class="fas fa-medal mr-2"></i> Developer Certification Level 1

## Introduction

In this lesson, you will learn the backend basics for building a custom Hubleto app from scratch. You will explore how Hubleto separates database logic into Models and RecordManagers, how to create your own tables, and how to define relations.

> You will learn how to:
>
>   * Create a custom CarRental app using the `php hubleto create app` command.
>   * Understand the difference between Models (data structure & UI) and RecordManagers (Eloquent database execution).
>   * Define data columns in the `describeColumns()` method.
>   * Link models together using a 1:N (One-to-Many) relationship in both the `$relations` array and Eloquent `HasMany` methods.
>   * Generate the frontend React UI instantly using the `create mvc` command.

## Study material

| Resource                                                                                                                      | Description                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| [Models](../../docs/framework/models)                                                                                         | Learn about the core building blocks of Hubleto data structures.                                        |
| [Record manager](../../docs/framework/models/record-manager)                                                                  | Understand how Hubleto interacts with the database using Laravel Eloquent.                              |
| [Relations](../../docs/framework/models/relations)                                                                            | Learn how to link multiple models together (e.g., 1:N relations).                                       |
| [`php hubleto` CLI agent](../../cli-agent)                                                                                    | Introduction to the CLI agent and its commands for generating boilerplate code.                         |
| [Sample `CarRental` app](https://github.com/mrgopes/hubleto-car-rental)                                                       | Source code of a sample CarRental app.                                                                  |

## Videos

<iframe width="560" height="315" src="https://www.youtube.com/embed/zmN_jaTd25M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

## Do you have any question?

Do you have any question or comment? Leave us a message in the community portal.

<a class="btn" href="https://community.hubleto.eu/d/35-qa-developer-certification-level-1"><span class="text">Go to community.hubleto.eu</span></a>

If you are new here, learn more about [developer certification programme](../../certification).