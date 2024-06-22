<?php

namespace App\Filament\Resources;

use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ExperienceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExperienceResource\RelationManagers;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
//    public static function getNavigationGroup(): ?string
//    {
//        return __('App Sections');
//    }
//    public static function getNavigationParentItem(): ?string
//    {
//        return __('Profile');
//    }
    public static function getNavigationLabel(): string
    {
        return __('Experiences');
    }
    public static function getNavigationBadge(): ?string
    {
        if (static::getModel()::count() > 0) {
            return static::getModel()::count();
        }
        return null;
    }
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Experience Information')
                    ->description('This information will be displayed publicly.')
                    ->icon('heroicon-o-briefcase')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Experience Name')
                            ->helperText('The name of the course. Maximum of 255 characters.')
                            ->required()
                            ->columnSpan(1)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('institution')
                            ->label('Institution')
                            ->helperText('The institution where the course was taken. Maximum of 255 characters.')
                            ->required()
                            ->columnSpan(2)
                            ->maxLength(255),
                        RichEditor::make('description')
                            ->label('Description')
                            ->maxLength(512)
                            ->helperText('Short description about the course. Maximum of 255 characters.')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'redo',
                                'underline',
                                'undo',
                            ])->columnSpanFull(),
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Start Date')
                            ->helperText('The day will not be displayed')
                            ->displayFormat('m/Y')
                            ->required(),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('End Date')
                            ->displayFormat('m/Y')
                            ->helperText('The day will not be displayed')
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->helperText('The status of the job')
                            ->options([
                                'in-progress' => 'In Progress',
                                'completed' => 'Completed',
                                'dropped' => 'Dropped',
                                'planned' => 'Planned',
                            ])
                            ->default('in-progress')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->colors([
                        'primary',
                        'primary' => 'in-progress',
                        'danger' => 'dropped',
                        'warning' => 'planned',
                        'success' => 'completed',
                        'info' => 'ongoing',
                    ]),
                Tables\Columns\TextColumn::make('name')
                    ->label('Experience Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('institution')
                    ->label('Institution')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Start Date')
                    ->sortable()
                    ->date('m/Y'),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('End Date')
                    ->sortable()
                    ->date('m/Y'),
            ])
            ->defaultSort('start_date', 'desc')
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
