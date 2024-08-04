<?php

namespace App\Infrastructure\Entity;

use App\Infrastructure\Repository\ReminderExerciseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReminderExerciseRepository::class)]
#[ORM\Table(name: 'reminder_exercises')]
class ReminderExercise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id = 0;

    #[ORM\Column(name: 'reminder_id')]
    private int $reminderId = 0;

    #[ORM\Column(length: 255)]
    private string $question = '';

    #[ORM\Column(length: 255)]
    private string $answer = '';

    #[ORM\Column(name: 'correct_answer', length: 255)]
    private string $correctAnswer = '';

    #[ORM\Column(name: 'is_completed')]
    private bool $isCompleted = false;

    #[ORM\Column(name: 'is_right')]
    private bool $isRight = false;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getReminderId(): int
    {
        return $this->reminderId;
    }

    public function setReminderId(int $reminderId): static
    {
        $this->reminderId = $reminderId;

        return $this;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): static
    {
        $this->answer = $answer;

        return $this;
    }

    public function getCorrectAnswer(): string
    {
        return $this->correctAnswer;
    }

    public function setCorrectAnswer(string $correctAnswer): static
    {
        $this->correctAnswer = $correctAnswer;

        return $this;
    }

    public function isCompleted(): bool
    {
        return $this->isCompleted;
    }

    public function setCompleted(bool $isCompleted): static
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    public function isRight(): bool
    {
        return $this->isRight;
    }

    public function setRight(bool $isRight): static
    {
        $this->isRight = $isRight;

        return $this;
    }
}
